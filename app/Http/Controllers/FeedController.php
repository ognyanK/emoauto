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

    	$redirect = '/details/'.$request->post_id;
    	return redirect($redirect);
    }
}
