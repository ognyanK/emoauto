<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Question;

class FeedController extends Controller
{
    public function index()
    {
        $info = Post::where('base_category','=','Автомобили')->paginate(10);

        return view('pages/feed', ['info' => $info]); //return models
    }

    public function storeQuestion(Request $request){
    	$question = new Question();

    	$question->post_id = $request->post_id;
    	$question->contacts_question = $request->contacts_question;
    	$question->contacts_name = $request->contacts_name;
    	$question->contacts_email = $request->contacts_email;
    	$question->contacts_phone = $request->contacts_phone;
    	$question->save();

    	$redirect = '/details/'.$request->post_id;
    	return redirect($redirect);
    }
}
