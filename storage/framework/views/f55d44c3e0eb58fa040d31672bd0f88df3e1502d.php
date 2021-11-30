<?php $__env->startSection('content'); ?>
	<div class="container">
        <table class="table table-hover table-condensed">
                
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
                    
                    </tr>
                </tbody>
                <?php $__currentLoopData = $salidas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pedido): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $__currentLoopData = $lotes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($l->idSalida == $pedido->id): ?>
                        <tr>
                            <th scope="row"><?php echo e($pedido->id); ?></th>
                            <th scope="row"><?php echo e($pedido->Cliente); ?></th>
                            <th scope="row"><?php echo e($pedido->placa); ?></th>
                            <th scope="row"><?php echo e($pedido->conductor); ?></th>                                        
                            <th scope="row"><?php echo e($l->P); ?></th>
                            <th scope="row"><?php echo e($l->T); ?></th> 
                        </tr>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                </tbody> 
        </table>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Escritorio\naviera1\resources\views/Salidas/VistaSalida.blade.php ENDPATH**/ ?>