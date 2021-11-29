<?php

namespace App\Http\Controllers;

use App\Ingresos;
use App\Producto;
use App\lotes;
use App\bahia;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class IngresosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $producto = Producto::all();
        $bahia = bahia::where('estado','Disponible')->get();
        return view("Ingreso.CrudIngresos", compact('producto','bahia'));
        //
    }
    public function index2()
    {
        $ingresos = Ingresos::all();
        //$query = "SELECT `idIngreso`, SUM(`pesoTotal`) as P, SUM(`total`) AS T FROM lotes GROUP BY(`idIngreso`);";
        $lotes = DB::table('lotes')
        ->select('idIngreso',DB::raw('SUM(pesoTotal) AS P'),DB::raw('SUM(total) AS T'))
        ->groupBy('idIngreso')
        ->get();

            
        

        //dd($lotes);
        //$bahia = bahia::where('estado','Disponible')->get();
        return view("Ingreso.Vista", compact('ingresos','lotes'));
        //
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
        //dd($request);
        $Ingreso = new Ingresos();
        $bahia= bahia::where('id',$request->bahia)->first();
        $bahia->estado="Activo";
        $bahia->update();
        

        $Ingreso->numeroContenedor = $request->contendoringreso;
        $Ingreso->placa = $request->placaIngreso;
        $Ingreso->conductor = $request->conductoringreso;
        $Ingreso->save();
        $a=$Ingreso->id;

        $producto = $request->nombreproducto;
        //dd($producto);

        for($i=0; $i< sizeof($producto);$i++){
            $Lote = new lotes();
            $id = explode("-",$producto[$i]);
            $TEMP = Producto::where('id', $id[0])->first()->peso;
            //dd($TEMP);
            $pesos=$TEMP * $request->idcantidad[$i];

            $Lote->idProdcuto=$id[0];
            $Lote->idIngreso=$a;


            $Lote->cantidadProducto=$request->idcantidad[$i];
            $Lote->fechaVencimiento=$request->idprecioC[$i];
            $Lote->pesoTotal=$pesos;
            $Lote->total=$pesos*0.50;
            $Lote->estado="activo";
            $Lote->save();
            
        }
        
        
        
       
        $producto = Producto::all();
        $bahia = bahia::where('estado','Disponible')->get();
        return view("Ingreso.CrudIngresos", compact('producto','bahia'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ingresos  $ingresos
     * @return \Illuminate\Http\Response
     */
    public function show(Ingresos $ingresos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ingresos  $ingresos
     * @return \Illuminate\Http\Response
     */
    public function edit(Ingresos $ingresos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ingresos  $ingresos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ingresos $ingresos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ingresos  $ingresos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ingresos $ingresos)
    {
        //
    }
}
