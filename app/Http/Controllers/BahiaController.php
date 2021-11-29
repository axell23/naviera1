<?php

namespace App\Http\Controllers;

use App\bahia;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BahiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bahia = bahia::all();
        return view("bahia.Vistabahia", compact('bahia'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $bahia= bahia::where('id',$request->bahia)->first();
        $bahia->estado="Disponible";
        $bahia->update();

        $bahia = bahia::all();
        return view("bahia.Vistabahia", compact('bahia'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\bahia  $bahia
     * @return \Illuminate\Http\Response
     */
    public function show(bahia $bahia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\bahia  $bahia
     * @return \Illuminate\Http\Response
     */
    public function edit(bahia $bahia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\bahia  $bahia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, bahia $bahia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\bahia  $bahia
     * @return \Illuminate\Http\Response
     */
    public function destroy(bahia $bahia)
    {
        //
    }
}
