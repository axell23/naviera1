@extends('layout')
@section('content')
	<div class="container">
        <div class="row">
                <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Producto</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Fecha vencimiento</th>
                          </tr>
                        </thead>
                        <tbody>
                       
            @foreach($lotes as $b)
                
            @if($temp[$b->id]<5)
                <tr class="table-danger">
            @elseif($temp[$b->id]<15)
                <tr class="table-warning">
            @else
                <tr class="table-success">
            @endif
                


                    <td>{{$b->id}}</td>
                    <td>{{App\producto::find($b->idProdcuto)->nombre}}</td>
                    <td>{{$b->cantidadProducto}}</td>
                    <td>{{$b->fechaVencimiento}}</td>
                  </tr>
            
            @endforeach
        </tbody>
    </table>
        </div>
	</div>
@endsection

{{-- <td class="table-success">...</td>
  <td class="table-danger">...</td>
  <td class="table-warning">...</td> --}}