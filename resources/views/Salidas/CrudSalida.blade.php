@extends('layout')
@section('content')
	<div class="container">
		
		<form method="POST" action="{{ route('sal.store') }}">
			@csrf
			<section>
				<div class="panel panel-header">
					<div class="row">
							<div class="col-md-3 mb-4">
									<label for="bahia">Bahia</label>
									<select name="bahia" id="bahia" class="custom-select selectcategoria">
											<option value="0" selected disabled>Seleccione bahia</option>
											@foreach($bahia as $b)
											<option value="{{$b->id}}">Bahía {{$b->id}}</option>
											@endforeach
									</select>
							</div>
                    </div>
                    <div class="row">
							<div class="col-md-4 mb-4">
									<label for="cliente">Nombre Cliente</label>
									<input id="cliente" name="cliente" type="text"  class="a form-control" autocomplete="off" required>
                            </div>
                    </div>
					<div class="row">
							<div class="col-md-4 mb-4">
									<label for="conductor">Conductor</label>
									<input id="conductor" name="conductor" type="text" class="a form-control" autocomplete="off" required>
							</div>
							<div class="col-md-4 mb-4">
									<label for="placa">Placa</label>
									<input id="placa" name="placa" type="text" class="a form-control" autocomplete="off" required>
							</div>
					</div>			
				</div>
				<div class="panel panel-footer">
					<table class="table table-border" id="Compra">
						<thead>
							<tr>
								<th>Lotes
								<span id="msgnombreproducto" name="msgnombreproducto" class="AlertaMsg"></span>
								</th>
								{{-- <th><a href="#" class="addRow btn btn-success">Agregar</a></th> --}}
								<td><button type="button" id="btmComprasTab"  class="addRow btn btn-success">Agregar</button></td>
							</tr>
						</thead>
						<tbody id="tbody">
							<tr>
								<td>
                                    <input id="nombrelote"  name="nombrelote[]" list="lotes" class="a form-control" autocomplete="off" required>
                                    <datalist id="lotes">
											@foreach ($lotes as $l)
											<option value="{{$l->id}}-{{App\producto::find($l->idProdcuto)->nombre}} cantidad: {{$l->cantidadProducto}} {{$temp[$l->id]}} "></option>
											@endforeach
									</datalist>  
								</td>
								<td><button type="button" id="btnEliminar" disabled class="btn btn-danger remove">Eliminar</button></td>
							</tr>
						</tbody>						
					</table>
				</div>
			</section>
			<button id="btmsubmitC" name="btmsubmitC" type="submit" class="btn btn-primary" >Iniciar Ingreso</button>
			<a href=""><button type="button" id="btnLimpiar" class="btn btn-danger">Limpiar Campos</button></a>
		</form>
	</div>
@endsection