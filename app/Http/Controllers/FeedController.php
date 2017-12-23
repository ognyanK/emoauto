<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Question;

class FeedController extends Controller
{
    public function index($category)
    {
        $info = Post::where('base_category','=',$category)->orderBy('id','DESC')->paginate(5);

        return view('pages/feed', ['info' => $info]); //return models
    }

    public function storeQuestion(Request $request){
    	$question = new Question();
        $message = "Your message was successfuly sent.";
        if(strlen($request->contacts_name) > 50 || strlen($request->contacts_email) > 50 ||
            (isset($request->contacts_phone) && strlen($request->contacts_phone) > 50 )){
                $message = "Your name, phone or email is too long!";
            }else{
            	$question->post_id = $request->post_id;
            	$question->contacts_question = $request->contacts_question;
            	$question->contacts_name = $request->contacts_name;
            	$question->contacts_email = $request->contacts_email;
                if(isset($request->contacts_phone)){
                	$question->contacts_phone = $request->contacts_phone;
                }else{
                    $question->contacts_phone = "Не е указан телефон.";
                }
            	$question->save();
            }

    	$redirect = '/details/'.$request->post_id;

        
    	return redirect($redirect)->with('message', $message);
    }
}
