<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Question;
use App\User;

class AdminPanel extends Controller
{
    public function getAdminPanelLogin() 
    {
        session_start();
        ob_start();
        if(isset($_SESSION['user']))
        {
            return $this->show();
        }
        return view('admin_panel_login');
    }

    public function logout(){
        session_start();
        ob_start();
        session_destroy();
        unset($_SESSION['user']);
        return redirect('/aplog');
    }

    public function login(Request $request){
        $user = User::where('username','=',$request->username)->where('password','=',$request->password)->get();
        if(count($user) > 0){
            session_start();
            ob_start();
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
            ob_start();
        }

        if(!isset($_SESSION['user']))
        {
            return redirect('/aplog');
        }
        

        $cars = Post::paginate(5);

        $questions_array = array();
        foreach ($cars as $car) {
        	$questions = Question::where('post_id','=',$car['id'])->get();
        	$questions_array[$car['id']] = count($questions);
        }

        return view('admin_panel')->with('cars', $cars)->with("questions_array", $questions_array); //return models
    }

    public function loadQuestions($id){
        session_start();
        ob_start();
        if(!isset($_SESSION['user']))
        {
            return redirect('/aplog');
        }

    	$questions = Question::where('post_id','=',$id)->get();
    	return $questions;
    }
}