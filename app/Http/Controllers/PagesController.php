<?php 

namespace App\Http\Controllers;

use App\Post;
use Session;

class PagesController extends Controller
{

	public function getIndex()
	{
		$info = Post::select('model','brand','price','currency','pictures')->take(3)->get(); 
		for($i=0;$i<count($info);$i++){
			$pics = explode(",",$info[$i]['pictures']);
			$info[$i]['pictures'] = $pics[0];
		}
		return view('pages/home')->with("info", $info);
	}

	public function getDetails() 
	{
		return view('pages/details');
	}

	public function getFeed() 
	{
		return view('pages/feed');
	}

	public function loadCategories(){
		$unique = array();
		$categories = Post::select('base_category')->get();
		for($i=0;$i<count($categories);$i++){
			array_push($unique, $categories[$i]->base_category);
		}
		$new_array = array_values(array_unique($unique));
		return $new_array;
	}
}