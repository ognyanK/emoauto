<?php 

namespace App\Http\Controllers;

use App\Post;
use Session;

class PagesController extends Controller
{

	public function getIndex()
	{
		return view('pages/home');
	}

	public function getDetails() 
	{
		return view('pages/details');
	}

	public function getFeed() 
	{
		return view('pages/feed');
	}

	public function getContact() 
	{
		
	}
}