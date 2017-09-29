<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Brand;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $brands = Brand::select('name')->get();

        return view('panelInsert')->with('brands', $brands); //return models
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
        $arr = array('base_category','brand','model','modif','engine_type','state','power','euro_standard','transmission','category','price','currency','year_of_manufacture','date_of_manufacture','mileage','color','region','populated_place');

        $post = new Post();
        $s = "random";

        for($i=0;$i<count($arr);$i++){
            $value = $request->input($arr[$i]);
            if(!is_null($value)){
                $post->setAttribute($arr[$i], $value);
            }
        }

        $post->safety = $this->getCheckboxValues($request, "safety", 17);
        $post->comfort = $this->getCheckboxValues($request, "comfort", 31);
        $post->other = $this->getCheckboxValues($request, "others", 16);
        $post->protection = $this->getCheckboxValues($request, "protection", 8);

        $post->exterior = $this->getCheckboxValues($request, "exterior", 14);
        $post->interior = $this->getCheckboxValues($request, "interior", 3);
        $post->specialized = $this->getCheckboxValues($request, "specialized", 3);

        $post->save();

        return $request->toArray();
    }

    private function set($post, $attr, $value) {
        if(!is_null($value)){
            echo $value;
            $post->attributes[$attr] = $value;
        }
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
        $mainInfoKeys = array('modif','engine_type','state','power','euro_standard','transmission','category','year_of_manufacture','date_of_manufacture','mileage','color','region','populated_place');

        $info = Post::where('id','=',$id)->get();
        $info = $info[0];
        $mainInfo = array();
        for($i=0;$i<count($mainInfoKeys);$i++){
            if($info[$mainInfoKeys[$i]]!=""){
                $mainInfo[$mainInfoKeys[$i]] = $info[$mainInfoKeys[$i]];
            }
        }
        $price = $info['price']." ".$info['currency'];
        $title = $info['brand']." ".$info['model'];
            
        return view('pages/details')->with('mainInfo',$mainInfo)->with('price',$price)->with('title',$title);
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
