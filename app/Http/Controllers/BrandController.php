<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;

class BrandController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $brands = Brand::where('name','=',$id)->select('models')->get();
        return (string)$brands[0]['models']; //return models
    }

    public function add(Request $request)
    {   
         $models = Brand::where('name','=',$request->id)->select("models")->get()[0]['models'];
         $models = $models.$request->models;
         $br = Brand::where('name','=',$request->id);
         $br->update(['models' => $models]);
    }
}
