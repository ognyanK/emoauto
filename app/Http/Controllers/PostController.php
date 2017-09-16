<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return 'index';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return 'create';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //var_dump($request);

        $s = "random";
        $post = new Post();
        $post->brand = $s;//$request->input('brand');
        $post->model = $s;//$request->input('model');
        $post->modification = $s;
        $post->engine_type = $s;//$request->input('engine_type');
        $post->state = $request->input('state');

        $post->power = $s;
        $post->euro_standard = $s;
        $post->transmission = $s;
        $post->category = $s;

        $post->price = $s;
        $post->currency = $s;
        $post->date_of_manufacture = $s;
        $post->year_of_manufacture = $s;
        $post->mileage = $s;

        $post->negotiable = false;

        $post->color = $s;
        $post->region = $s;
        $post->populated_place = $s;
        $post->expiration_date = $s;

        $post->safety = $this->getCheckboxValues($request, "safety", 17);
        $post->comfort = $this->getCheckboxValues($request, "comfort", 31);
        $post->other = $this->getCheckboxValues($request, "others", 28);;
        $post->protection = $this->getCheckboxValues($request, "protection", 14);;

        $post->save();

        return "ok";
    }

    private function getCheckboxValues(Request $request, $category, $range) {
        $arr = array();
        for($i = 1; $i<=$range ; $i++) {
            $value = $request->input($category.$i);
            if(!is_null($value)){
                array_push($arr, $i);
            }
        }
        return implode(" ", $arr);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return 'show';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return 'edit';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return 'update';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return 'destroy';
    }
}
