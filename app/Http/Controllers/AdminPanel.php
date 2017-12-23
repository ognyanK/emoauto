<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Question;
use App\User;
use App\Slider;

class AdminPanel extends Controller
{
    public function getAdminPanelLogin() 
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        if(isset($_SESSION['user']))
        {
            return $this->show();
        }
        return view('admin_panel_login');
    }

    public function logout(){
        session_start();
        session_destroy();
        unset($_SESSION['user']);
        return redirect('/aplog');
    }

    public function login(Request $request){
        $user = User::where('username','=',$request->username)->where('password','=',sha1($request->password))->get();
        if(count($user) > 0){
            session_start();
            $_SESSION['user'] = $user[0]->id;
            return redirect('/admin_panel');
        }else{
            return redirect('/aplog');
        }
    }

    public function show()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        if(!isset($_SESSION['user']))
        {
            return redirect('/aplog');
        }
        

        $cars = Post::orderBy('id','DESC')->paginate(5);

        $questions_array = array();
        foreach ($cars as $car) {
        	$questions = Question::where('post_id','=',$car['id'])->get();
        	$questions_array[$car['id']] = count($questions);
        }
        $array = array('one','two','three','four','five');
        $slider = Slider::where('id','=',1)->get();
        $slider_pics = array();
        for($i=0;$i<5;$i++){
            array_push($slider_pics, $slider[0][$array[$i]]);
        }

        return view('admin_panel')->with('cars', $cars)->with("questions_array", $questions_array)->with('slider_pics',$slider_pics); //return models
    }

    public function loadQuestions($id){
        session_start();
        if(!isset($_SESSION['user']))
        {
            return redirect('/aplog');
        }

    	$questions = Question::where('post_id','=',$id)->get();
    	return $questions;
    }

    public function slider_store(Request $request){
        $arrayName = array('one' => "",'two' => "",'three' => "",'four' => "",'five' => "");
        $array = array('','one','two','three','four','five');

        for($i=1;$i<=5;$i++){
            if($request->file('pic'.$i) == null){
                continue;
            }
            $newfilename = $request->file('pic'.$i)->getClientOriginalName();
            if(!file_exists("/uploads/".$newfilename)){
                $request->file('pic'.$i)->move(public_path("/uploads"), $newfilename);
            }
            $arrayName[$array[$i]] = $newfilename;
        }
        $slider = Slider::where('id', 1);

        $i = 0;
        foreach ($arrayName as $an => $value) {
            $i++;
           if($value==""){
            continue;
           }
           $slider->update([$array[$i] => $value]);
        }
        return redirect('admin_panel');
    }

    public function change_password(Request $request)
    {
        $user = User::where('id', 1);
        $user_map = $user->get()[0];
        $old_pass = sha1($request->old_pass);
        $message = "";


        if($old_pass == $user_map['password']){
            $user->update(['password' => sha1($request->new_pass)]);
            $message = "Your password has been changed.";
        }else{
            $message = "Wrong old password.";
        }

        return redirect('admin_panel')->with('message', $message);
    }

}