<?php


namespace App\Http\Controllers;
use App\Categoria;
use App\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoria = Categoria::all();

        return view("Productos.CrudProductos", compact('categoria'));

    }

    public function index2()
    {
        $producto = Producto::all();
        // $lotes = DB::table('lotes')
        // ->select('idIngreso',DB::raw('SUM(pesoTotal) AS P'),DB::raw('SUM(total) AS T'))
        // ->groupBy('idIngreso')
        // ->get();

            
        

        //dd($lotes);
        //$bahia = bahia::where('estado','Disponible')->get();
        return view("Productos.VistaProducto", compact('producto'));
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

   
        $creandoProducto = new Producto();

        $creandoProducto->nombre = $request->nombreProducto;
        $creandoProducto->peso = $request->peso;
        $creandoProducto->descripcion = $request->descripcion;
        $creandoProducto->categoria= $request->idCategoria;
        $creandoProducto->cantidad= 0;
        
        $creandoProducto->save();
        $categoria = Categoria::all();

        return view("Productos.CrudProductos", compact('categoria'));
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
