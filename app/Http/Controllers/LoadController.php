<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;

class LoadController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

        $brands = Brand::select('name')->get();

        return view('panelInsert')->with('brands', $brands); //return models
    }
}
