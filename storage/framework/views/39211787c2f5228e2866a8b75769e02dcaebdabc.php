<?php $__env->startSection('content'); ?>
	<div class="container">
        <table class="table table-hover table-condensed">
                
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
                    
                    </tr>
                </tbody>
                    <?php $__currentLoopData = $producto; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pedido): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th scope="row"><?php echo e($pedido->id); ?></th>
                                    <th scope="row"><?php echo e($pedido->nombre); ?></th>
                                    <th scope="row"><?php echo e($pedido->peso); ?></th>
                                    <th scope="row"><?php echo e($pedido->descripcion); ?></th>                                        
                                    <th scope="row"><?php echo e($pedido->categoria); ?></th>
                                    <th scope="row"><?php echo e($pedido->cantidad); ?></th> 
                                </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                </tbody> 
        </table>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Escritorio\naviera1\resources\views/Productos/VistaProducto.blade.php ENDPATH**/ ?>