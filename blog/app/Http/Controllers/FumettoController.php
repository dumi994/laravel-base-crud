<?php

namespace App\Http\Controllers;

use App\Fumetto;
use Illuminate\Http\Request;

class FumettoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $fumetti = Fumetto::all();
       return view('home', compact('fumetti'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fumetti.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fumetto = new Fumetto();
        $fumetto->title = $request->title;
        $fumetto->desc = $request->desc;
        $fumetto->poster = $request->poster;
        $fumetto->price = $request->price;
        
        $fumetto->save();
        return redirect()->route('fumetti.show', $fumetto->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fumetto  $fumetto
     * @return \Illuminate\Http\Response
     */
    public function show(Fumetto $fumetto)
    {
        return view('fumetti.show', compact('fumetto'));   //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fumetto  $fumetto
     * @return \Illuminate\Http\Response
     */
    public function edit(Fumetto $fumetto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fumetto  $fumetto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fumetto $fumetto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fumetto  $fumetto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fumetto $fumetto)
    {
        //
    }
}
