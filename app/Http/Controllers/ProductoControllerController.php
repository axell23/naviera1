<?php

namespace App\Http\Controllers;

use App\ProductoController;
use Illuminate\Http\Request;

class ProductoControllerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("Productos.CrudProductos");
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
     * @param  \App\ProductoController  $productoController
     * @return \Illuminate\Http\Response
     */
    public function show(ProductoController $productoController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProductoController  $productoController
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductoController $productoController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProductoController  $productoController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductoController $productoController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProductoController  $productoController
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductoController $productoController)
    {
        //
    }
}
