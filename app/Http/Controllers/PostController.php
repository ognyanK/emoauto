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
        session_start();
        ob_start();
        if(!isset($_SESSION['user']))
        {
            return redirect('/aplog');
        }

        $brands = Brand::select('name')->get();

        return view('panelInsert')->with('brands', $brands); //return models
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        session_start();
        ob_start();
        if(!isset($_SESSION['user']))
        {
            return redirect('/aplog');
        }

        $brands = Brand::select('name')->get();
        $info = Post::where('id','=',$id)->get();
        $info = $info[0];

        return view('panelInsert')->with('brands', $brands)->with('base_category', $info['base_category'])
        ->with('brandValue', $info['brand'])->with('model',$info['model'])->with('modification',$info['modification'])
        ->with('engine_type',$info['engine_type'])->with('date_of_manufacture',$info['date_of_manufacture'])
        ->with('state',$info['state'])->with('power',$info['power'])->with('euro_standard',$info['euro_standard'])
        ->with('transmission', $info['transmission'])->with('category', $info['category'])->with('price', $info['price'])
        ->with('currency', $info['currency'])->with('year_of_manufacture', $info['year_of_manufacture'])
        ->with('mileage',$info['mileage'])->with('color',$info['color'])->with('region',$info['region'])
        ->with('populated_place',$info['populated_place'])->with('pictures', $info['pictures'])->with('id',$info['id'])
        ->with('safety',$info['safety'])->with('comfort',$info['comfort'])->with('other',$info['other'])
        ->with('exterior',$info['exterior'])->with('protection',$info['protection'])->with('interior',$info['interior'])
        ->with('specialized',$info['specialized'])->with('phone',$info['phone'])->with('email',$info['e-mail'])
        ->with('additional_info',$info['additional_info']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        session_start();
        ob_start();
        if(!isset($_SESSION['user']))
        {
            return redirect('/aplog');
        }

        $filenames = array_filter(explode(",", $request->filenames));

        $edit = $request->id != "-1";

        if($edit){
            $created_at = Post::where('id','=',$request->id)->value('created_at');
            if(!isset($created_at))return redirect('admin_panel');
            $this->destroy_no_session_workaround($request->id);
        }

        for($i = 0;$i<count($request->file('files'));$i++){
            $newfilename = $request->file('files')[$i]->getClientOriginalName();
            $request->file('files')[$i]->move(public_path("/uploads"), $newfilename);
        }

        $pictures = implode(",", $filenames);

        $arr = array('base_category','brand','model','modification','engine_type','state','power','euro_standard','transmission','category','price','currency','year_of_manufacture','date_of_manufacture','mileage','color','region','populated_place','phone','e-mail');

        $post = new Post();
        $s = "random";

        for($i=0;$i<count($arr);$i++){
            $value = $request->input($arr[$i]);
            if(!is_null($value)){
                $post->setAttribute($arr[$i], $value);
            }
        }
        if(isset($request->additional_info)){
            $post->additional_info = $request->additional_info;
        }else{
            $post->additional_info = "";
        }

        $post->safety = $this->getCheckboxValues($request, "safety", 17);
        $post->comfort = $this->getCheckboxValues($request, "comfort", 31);
        $post->other = $this->getCheckboxValues($request, "other", 16);
        $post->protection = $this->getCheckboxValues($request, "protection", 8);

        $post->exterior = $this->getCheckboxValues($request, "exterior", 14);
        $post->interior = $this->getCheckboxValues($request, "interior", 3);
        $post->specialized = $this->getCheckboxValues($request, "specialized", 3);

        $post->pictures = $pictures;

        if($edit){
            $post->created_at = $created_at;
            $post->id = $request->id;
        }

        $post->save();

        return redirect('admin_panel');
    }

    private function set($post, $attr, $value) {
        if(!is_null($value)){
            echo $value;
            $post->attributes[$attr] = $value;
        }
    }

    private function getCheckboxValues(Request $request, $category, $range) {
        $arr = array();
        for($i = 0; $i<$range ; $i++) {
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
        $brands = Brand::select('name')->get();
        $info = Post::where('id','=',$id)->get();
        $info = $info[0];

        return view('pages/details')->with('brands', $brands)->with('base_category', $info['base_category'])
        ->with('brandValue', $info['brand'])->with('model',$info['model'])->with('modification',$info['modification'])
        ->with('engine_type',$info['engine_type'])->with('date_of_manufacture',$info['date_of_manufacture'])
        ->with('state',$info['state'])->with('power',$info['power'])->with('euro_standard',$info['euro_standard'])
        ->with('transmission', $info['transmission'])->with('category', $info['category'])->with('price', $info['price'])
        ->with('currency', $info['currency'])->with('year_of_manufacture', $info['year_of_manufacture'])
        ->with('mileage',$info['mileage'])->with('color',$info['color'])->with('region',$info['region'])
        ->with('populated_place',$info['populated_place'])->with('pictures', $info['pictures'])->with('id',$info['id'])
        ->with('safety',$info['safety'])->with('comfort',$info['comfort'])->with('other',$info['other'])
        ->with('exterior',$info['exterior'])->with('protection',$info['protection'])->with('interior',$info['interior'])
        ->with('specialized',$info['specialized'])->with('phone',$info['phone'])->with('email',$info['e-mail'])
        ->with('additional_info',$info['additional_info'])->with('created_at',$info['created_at'])->with('updated_at',$info['updated_at'])->with("MODE", "DETAILS"); //return models
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        session_start();
        ob_start();
        if(!isset($_SESSION['user']))
        {   
            return redirect('/aplog');
        }

        Post::where('id','=',$id)->delete();
        return redirect('admin_panel');
    }
    private function destroy_no_session_workaround($id)
    {
        if(!isset($_SESSION['user']))
        {   
            return redirect('/aplog');
        }

        Post::where('id','=',$id)->delete();
        return redirect('admin_panel');
    }
}
