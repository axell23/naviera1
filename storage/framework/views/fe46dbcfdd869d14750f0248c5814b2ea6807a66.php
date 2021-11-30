<?php $__env->startSection('content'); ?>
	<div class="container">
		
		<form method="POST" action="<?php echo e(route('sal.store')); ?>">
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
								
								<td><button type="button" id="btmComprasTab"  class="addRow btn btn-success">Agregar</button></td>
							</tr>
						</thead>
						<tbody id="tbody">
							<tr>
								<td>
                                    <input id="nombrelote"  name="nombrelote[]" list="lotes" class="a form-control" autocomplete="off" required>
                                    <datalist id="lotes">
											<?php $__currentLoopData = $lotes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<option value="<?php echo e($l->id); ?>-<?php echo e(App\producto::find($l->idProdcuto)->nombre); ?> cantidad: <?php echo e($l->cantidadProducto); ?> <?php echo e($temp[$l->id]); ?> "></option>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Escritorio\naviera1\resources\views/Salidas/CrudSalida.blade.php ENDPATH**/ ?>