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
        $post->marka = $request->input('f5');
        $post->model = $s;
        $post->modifikaciq = $s;
        $post->tip_dvigatel = $s;
        $post->sustoqnie = $s;
        $post->moshtnost = $s;
        $post->evrostandart = $s;
        $post->skorostna_kutiq = $s;
        $post->kategoriq = $s;
        $post->cena = $s;
        $post->valuta = $s;
        $post->data_proizvodstvo = $s;
        $post->godina_proizvodstvo = $s;
        $post->probeg = $s;
        $post->po_dogovarqne = false;
        $post->cvqt = $s;
        $post->region = $s;
        $post->naseleno_mqsto = $s;
        $post->validnost_na_obqvata = $s;

        $post->save();

        return var_dump('<pre>' . $request . '</pre>');
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
