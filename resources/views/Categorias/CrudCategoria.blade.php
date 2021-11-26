@extends('layout')
@section('content')
	<div class="container">
		<form method="POST" action="{{route('cat.store')}}" id="formulario">
			 @csrf 
			<section>
				<div class="panel panel-header">
					<div class="row">
						<div class="col-md-6 mb-4">
						

        <div class="form-row">
		<div class="form-group col-md-8">
			<label>Nombre Categoria</label>
			<input type="text" class="form-control" id="nombreCategoria" name="nombreCategoria" maxlength="25" placeholder="Escribe nombre de categoria...">
		</div>

		<div class="form-group col-md-8">
			<label>Descripcion</label>
			<input type="text" class="form-control" id="descripcion" name="descripcion" maxlength="25" placeholder="Escriba nombre de categoria...">
		</div>


				</div>
				<div class="panel panel-footer">
				
			</section>
			<button id="btmsubmitC" name="btmsubmitC" type="submit" class="btn btn-primary" >Ingresar Categoria</button>
			<a href=""><button type="button" id="btnLimpiar" class="btn btn-danger">Limpiar Campos</button></a>
		</form>
	</div>
@endsection


