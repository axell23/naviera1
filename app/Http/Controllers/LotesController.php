<?php

namespace App\Http\Controllers;

use App\lotes;
use Illuminate\Http\Request;
use DateTime;

class LotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lotes = lotes::where('estado','activo')->get();
        //$bahia = bahia::where('estado','Disponible')->get();
        $temp = [];
        $hoy = new DateTime();
        foreach($lotes as $l){
            $t= new DateTime($l->fechaVencimiento);
            $diff = $t->diff($hoy);
            //$b=$diff->days;
            //$c=$b*($l->total);
            //$texto = "Monto de almacenamiento: $".$c." días almacenado: ".$b." ";
             $temp[$l->id]=$diff->days;
        }

        return view("lotes.vistaLotes", compact('lotes','temp'));
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
     * @param  \App\lotes  $lotes
     * @return \Illuminate\Http\Response
     */
    public function show(lotes $lotes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\lotes  $lotes
     * @return \Illuminate\Http\Response
     */
    public function edit(lotes $lotes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\lotes  $lotes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, lotes $lotes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\lotes  $lotes
     * @return \Illuminate\Http\Response
     */
    public function destroy(lotes $lotes)
    {
        //
    }
}
