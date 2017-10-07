<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Question;

class AdminPanel extends Controller
{
    public function show()
    {
        $cars = Post::paginate(5);

        $questions_array = array();
        foreach ($cars as $car) {
        	$questions = Question::where('post_id','=',$car['id'])->get();
        	$questions_array[$car['id']] = count($questions);
        }

        return view('admin_panel')->with('cars', $cars)->with("questions_array", $questions_array); //return models
    }

    public function loadQuestions($id){
    	$questions = Question::where('post_id','=',$id)->get();
    	return $questions;
    }
}
