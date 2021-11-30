<?php

namespace App\Http\Controllers;
use DateTime;
use App\Salidas;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\bahia;
use App\lotes;
use App\Producto;
use DB;

class SalidasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lotes = lotes::where('estado','activo')->get();
        $bahia = bahia::where('estado','Disponible')->get();
        $temp = [];
        $t=[];
        $hoy = new DateTime();
        foreach($lotes as $l){
            $t= new DateTime($l->created_at);
            $diff = $t->diff($hoy);
            $b=$diff->days;
            $c=$b*($l->total);
            $texto = "Monto de almacenamiento: $".$c." días almacenado: ".$b." ";
             $temp[$l->id]=$texto;
        }
        //dd($temp);
        return view("Salidas.CrudSalida", compact('bahia','lotes','temp'));
    }

    public function index2()
    {
        $salidas = Salidas::all();
        // //$query = "SELECT `idIngreso`, SUM(`pesoTotal`) as P, SUM(`total`) AS T FROM lotes GROUP BY(`idIngreso`);";
         $lotes = DB::table('lotes')
        ->select('idSalida',DB::raw('SUM(pesoTotal) AS P'),DB::raw('SUM(total) AS T'))
        ->groupBy('idSalida')
        ->get();

            
        

        //dd($lotes);
        //$bahia = bahia::where('estado','Disponible')->get();
        return view("Salidas.VistaSalida", compact('salidas','lotes'));
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
        //ingreso
        $Salidas = new Salidas();

        //bahia
        $bahia= bahia::where('id',$request->bahia)->first();
        $bahia->estado="Activo";
        $bahia->update();
        

        $Salidas->Cliente = $request->cliente;
        $Salidas->placa = $request->placa;
        $Salidas->conductor = $request->conductor;
        $Salidas->save();
        $a=$Salidas->id;

        $slotes = $request->nombrelote;
        //dd($producto);

        //lote
        for($i=0; $i< sizeof($slotes);$i++){

            $id = explode("-",$slotes[$i]);
            //dd($id[0]);
            $Lotes = lotes::where('id', $id[0])->first();
            //dd($Lotes);
            //$pesos=$TEMP * $request->idcantidad[$i];


            //actualiza producto
            $pro= Producto::where('id',$Lotes->idProdcuto)->first();
            $pro->cantidad -= $Lotes->cantidadProducto;
            $pro->update();
            //ingresa lote

            $Lotes->idSalida =$a;
            $Lotes->estado="inactivo";
            $Lotes->update();
            
        }
        
        
        $Salidas = Salidas::where('id',$a)
                                ->get();
        $lotes = lotes::where('idSalida', $a)
        ->get();
        $pdf = \PDF::loadView('PDF.NotaDeSalida', compact('Salidas', 'lotes'));
        //dd($pdf);
        
        //return 
       
        //$producto = Producto::all();
        //$bahia = bahia::where('estado','Disponible')->get();
        return $pdf->setPaper('a4', 'landscape')->download('NotadeSalida.pdf');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Salidas  $salidas
     * @return \Illuminate\Http\Response
     */
    public function show(Salidas $salidas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Salidas  $salidas
     * @return \Illuminate\Http\Response
     */
    public function edit(Salidas $salidas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Salidas  $salidas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Salidas $salidas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Salidas  $salidas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Salidas $salidas)
    {
        //
    }
}
