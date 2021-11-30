<?php $__env->startSection('content'); ?>
	<div class="container">
		<form method="POST" action="" id="formulario">
			<!-- <?php echo csrf_field(); ?> -->
			<section>
				<div class="panel panel-header">
					<div class="row">
						<div class="col-md-6 mb-4">
							<label for="idproveedor">Proveedor</label>
							<select name="idproveedor" id="idproveedor" class="custom-select selectproveedor">
								<option value="0" selected disabled>Seleccione un proveedor</option>
								
							</select>
							<span id="msgidproveedor" name="msgidproveedor" class="AlertaMsg"></span>
						</div>
					</div>
					<div class="row">
							<div class="col-md-2 mb-4">
									<label for="fechaingreso">Fecha</label>
									<input id="fechaingreso" type="date" class="a form-control" autocomplete="off" required>
							</div>
							<div class="col-md-5 mb-4">
									<label for="contendoringreso">Contenedor</label>
									<input id="contendoringreso" type="text"  class="a form-control" autocomplete="off" required>
							</div>
							<div class="col-md-5 mb-4">
									<label for="placaIngreso">Placa</label>
									<input id="placaIngreso" type="text" class="a form-control" autocomplete="off" required>
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
								
								<td><button type="button" id="btmComprasTab"  class="addRow btn btn-success">Agregar</button></td>
							</tr>
						</thead>
						<tbody id="tbody">
							<tr>

								<td>
									<input id="nombreproducto" disabled name="nombreproducto[]" list="productos" class="a form-control" autocomplete="off" required>
									<datalist id="productos">
									</datalist>  
								</td>

								<td>
									<input type="number" min="1" disabled name="idcantidad[]" id="idcantidad" class="b form-control" required>
								</td>
								<td>
									<input type="date" min="0.1" disabled step="any" name="idprecioC[]" class="c form-control" required>
								</td>
								
								<!--  -->
								<td><button type="button" id="btnEliminar" disabled class="btn btn-danger remove">Eliminar</button></td>
							</tr>
						</tbody>						
					</table>
				</div>
			</section>
			<button id="btmsubmitC" name="btmsubmitC" type="submit" class="btn btn-primary" disabled>Iniciar Ingreso</button>
			<a href=""><button type="button" id="btnLimpiar" class="btn btn-danger">Limpiar Campos</button></a>
		</form>
	</div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\axell\Documents\GitHub\naviera1\resources\views/Ingreso/CrudIngresos.blade.php ENDPATH**/ ?>