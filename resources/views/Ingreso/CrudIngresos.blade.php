@extends('layout')
@section('content')
	<div class="container">
		
		<form method="POST" action="{{ route('ing.store') }}">
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
									<label for="conductoringreso">Conductor</label>
									<input id="conductoringreso" name="conductoringreso" type="text" class="a form-control" autocomplete="off" required>
							</div>
							<div class="col-md-4 mb-4">
									<label for="contendoringreso">Contenedor</label>
									<input id="contendoringreso" name="contendoringreso" type="text"  class="a form-control" autocomplete="off" required>
							</div>
							<div class="col-md-4 mb-4">
									<label for="placaIngreso">Placa</label>
									<input id="placaIngreso" name="placaIngreso" type="text" class="a form-control" autocomplete="off" required>
							</div>
					</div>			
				</div>
				<div class="panel panel-footer">
					<table class="table table-border" id="Compra">
						<thead>
							<tr>
								<th>Nombre del producto
								<span id="msgnombreproducto" name="msgnombreproducto" class="AlertaMsg"></span>
								</th>
								<th>Cantidad
								<span id="msgidcantidad" name="msgidcantidad" class="AlertaMsg"></span>
								</th>
								<th>Fecha Vencimiento
								<span id="msgidprecioC" name="msgidprecioC" class="AlertaMsg"></span>
								</th>
								{{-- <th><a href="#" class="addRow btn btn-success">Agregar</a></th> --}}
								<td><button type="button" id="btmComprasTab"  class="addRow btn btn-success">Agregar</button></td>
							</tr>
						</thead>
						<tbody id="tbody">
							<tr>
								<td>
									<input id="nombreproducto"  name="nombreproducto[]" list="productos" class="a form-control" autocomplete="off" required>
									<datalist id="productos">
											@foreach ($producto as $productoiten)
											<option value="{{$productoiten->id}}-{{$productoiten->nombre}} ({{$productoiten->peso}}kg)"></option>
											@endforeach
									</datalist>  
								</td>

								<td>
									<input type="number" min="1"  name="idcantidad[]" id="idcantidad" class="b form-control" required>
								</td>
								<td>
									<input type="date" min="0.1"  step="any" name="idprecioC[]" class="c form-control" required>
								</td>
								
								<!-- {{-- <td><a href="#" class="btn btn-danger remove">Eliminar</a></td> --}} -->
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


