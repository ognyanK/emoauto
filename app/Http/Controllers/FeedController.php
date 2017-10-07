<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class FeedController extends Controller
{
    public function index()
    {
        $info = Post::where('base_category','=','Автомобили')->paginate(10);

        return view('pages/feed', ['info' => $info]); //return models
    }
}
