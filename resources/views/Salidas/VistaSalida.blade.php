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
                            <th scope="col">Cliente</th>
                            <th scope="col">Placa</th>
                            <th scope="col">Conductor</th>
                            <th scope="col">Peso Total(kg)</th>
                            <th scope="col">Total $</th>
                        </tr>
                    </thead>
                    <tbody id="Vistasalida">
                    <tr>
                    {{-- <td align="center" colspan="5">Ingrese el nombre o codigo de producto que desea ver </td> --}}
                    </tr>
                </tbody>
                @foreach ($salidas as $pedido)
                @foreach ($lotes as $l)
                    @if ($l->idSalida == $pedido->id)
                        <tr>
                            <th scope="row">{{$pedido->id}}</th>
                            <th scope="row">{{$pedido->Cliente}}</th>
                            <th scope="row">{{$pedido->placa}}</th>
                            <th scope="row">{{$pedido->conductor}}</th>                                        
                            <th scope="row">{{$l->P}}</th>
                            <th scope="row">{{$l->T}}</th> 
                        </tr>
                    @endif
                @endforeach
            @endforeach 
                </tbody> 
        </table>
	</div>
@endsection