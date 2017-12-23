<?php 

namespace App\Http\Controllers;

use App\Providers\PagesService;

class PagesController extends Controller
{
	private $pagesService;

	function __construct() {
		$this->pagesService = new PagesService();
	}

	public function home()
	{

		$info = $this->pagesService->getNewestCars(3);
		$slider_pics = $this->pagesService->getSliderPics();
		$cat_count = $this->pagesService->getCategoryCount();

		return view('pages/home')->with("info", $info)->with('slider_pics', $slider_pics)->with('cat_count', $cat_count);
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
		return $this->pagesService->loadCategories();
	}
}