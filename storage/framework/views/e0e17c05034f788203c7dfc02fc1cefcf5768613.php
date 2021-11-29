<?php $__env->startSection('content'); ?>
	<div class="container">
		<form method="POST" action="<?php echo e(route('ing.store')); ?>">
			<?php echo csrf_field(); ?>
			<section>
				<div class="panel panel-header">
					<div class="row">
							<div class="col-md-3 mb-4">
									<label for="bahia">Bahia</label>
									<select name="bahia" id="bahia" class="custom-select selectcategoria">
											<option value="0" selected disabled>Seleccione bahia</option>
											<?php $__currentLoopData = $bahia; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<option value="<?php echo e($b->id); ?>">Bahía <?php echo e($b->id); ?></option>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
								
								<td><button type="button" id="btmComprasTab"  class="addRow btn btn-success">Agregar</button></td>
							</tr>
						</thead>
						<tbody id="tbody">
							<tr>
								<td>
									<input id="nombreproducto"  name="nombreproducto[]" list="productos" class="a form-control" autocomplete="off" required>
									<datalist id="productos">
											<?php $__currentLoopData = $producto; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productoiten): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<option value="<?php echo e($productoiten->id); ?>-<?php echo e($productoiten->nombre); ?> (<?php echo e($productoiten->peso); ?>kg)"></option>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</datalist>  
								</td>

								<td>
									<input type="number" min="1"  name="idcantidad[]" id="idcantidad" class="b form-control" required>
								</td>
								<td>
									<input type="date" min="0.1"  step="any" name="idprecioC[]" class="c form-control" required>
								</td>
								
								<!--  -->
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
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Escritorio\naviera1\resources\views/Ingreso/CrudIngresos.blade.php ENDPATH**/ ?>