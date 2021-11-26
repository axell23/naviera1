<?php

namespace App\Http\Controllers;

use App\ingresoCargaController;
use Illuminate\Http\Request;

class IngresoCargaControllerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("Ingreso.CrudIngresos");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ingresoCargaController  $ingresoCargaController
     * @return \Illuminate\Http\Response
     */
    public function show(ingresoCargaController $ingresoCargaController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ingresoCargaController  $ingresoCargaController
     * @return \Illuminate\Http\Response
     */
    public function edit(ingresoCargaController $ingresoCargaController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ingresoCargaController  $ingresoCargaController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ingresoCargaController $ingresoCargaController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ingresoCargaController  $ingresoCargaController
     * @return \Illuminate\Http\Response
     */
    public function destroy(ingresoCargaController $ingresoCargaController)
    {
        //
    }
}
