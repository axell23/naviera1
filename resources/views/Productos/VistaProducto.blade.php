@extends('layout')
@section('content')
	<div class="container">
        <table class="table table-hover table-condensed">
                {{-- <div class="input-group-prepend">
                    <input class="form-control mr-sm-2" name="textoVenta" id="textoVenta" type="text" placeholder="Buscar Productos" aria-label="Search">
                </div> --}}
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Peso (kg)</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Cantidad</th>
                        </tr>
                    </thead>
                    <tbody id="VistaProducto">
                    <tr>
                    {{-- <td align="center" colspan="5">Ingrese el nombre o codigo de producto que desea ver </td> --}}
                    </tr>
                </tbody>
                    @foreach ($producto as $pedido)
                                <tr>
                                    <th scope="row">{{$pedido->id}}</th>
                                    <th scope="row">{{$pedido->nombre}}</th>
                                    <th scope="row">{{$pedido->peso}}</th>
                                    <th scope="row">{{$pedido->descripcion}}</th>                                        
                                    <th scope="row">{{$pedido->categoria}}</th>
                                    <th scope="row">{{$pedido->cantidad}}</th> 
                                </tr>
                    @endforeach 
                </tbody> 
        </table>
	</div>
@endsection