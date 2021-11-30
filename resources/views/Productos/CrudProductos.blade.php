@extends('layout')
@section('content')
	<div class="container">
		<form method="POST" action="{{route('Reg.store')}}" id="formulario">
			 @csrf 
			<section>
				<div class="panel panel-header">
					<div class="row">
						<div class="col-md-6 mb-4">
						

        <div class="form-row">
		<div class="form-group col-md-8">
			<label>Nombre Producto</label>
			<input type="text" class="form-control" id="nombreProducto" name="nombreProducto" maxlength="25" placeholder="Escribe nombre del Producto...">
		</div>

		<div class="form-row">
		<div class="form-group col-md-8">
			<label>Peso</label>
			<input type="text" class="form-control" id="peso" name="peso" maxlength="25" placeholder="Escriba el peso de Producto...">
		</div>

		<div class="form-group col-md-8">
			<label>Descripcion</label>
			<input type="text" class="form-control" id="descripcion" name="descripcion" maxlength="25" placeholder="Descripcion del Producto...">
		</div>

		
		<div class="panel panel-header">
					<div class="row">
						<div class="col-md-6 mb-4">
							<label for="idCategoria">Categoria</label>
							<select name="idCategoria" id="idCategoria" class="custom-select selectcategoria">
								<option value="0" selected disabled>Seleccione Categoria</option>
								@foreach($categoria as $cat)
								<option value="{{$cat->id}}">{{$cat->nombre}}</option>
								@endforeach
							</select>
							<span id="" name="" class="AlertaMsg"></span>
						</div>
					</div>
				</div>

				</div>
				<div class="panel panel-footer">
				
			</section>
			<button id="btmsubmitC" name="btmsubmitC" type="submit" class="btn btn-primary" >Ingresar Producto</button>
			<a href=""><button type="button" id="btnLimpiar" class="btn btn-danger">Limpiar Campos</button></a>
		</form>
	</div>
@endsection


