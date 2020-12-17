<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategorieControllers extends Controller
{
    //
    
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Categorie::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Categorie::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param Categorie  $categorie
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Categorie $categorie)
    {
        //
        return $categorie;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *  @param  Categorie  $categorie
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categorie $categorie)
    {
        //
        $categorie->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     * @param Categorie  $categorie
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categorie $categorie)
    {
        //
        $categorie->delete();
    }
}
