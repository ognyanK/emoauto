<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class AdminPanel extends Controller
{
    public function show()
    {

        $cars = Post::get();
        return view('admin_panel')->with('cars', $cars); //return models
    }
}
