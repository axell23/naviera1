<?php $__env->startSection('content'); ?>
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
                       
            <?php $__currentLoopData = $lotes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
            <?php if($temp[$b->id]<5): ?>
                <tr class="table-danger">
            <?php elseif($temp[$b->id]<15): ?>
                <tr class="table-warning">
            <?php else: ?>
                <tr class="table-success">
            <?php endif; ?>
                


                    <td><?php echo e($b->id); ?></td>
                    <td><?php echo e(App\producto::find($b->idProdcuto)->nombre); ?></td>
                    <td><?php echo e($b->cantidadProducto); ?></td>
                    <td><?php echo e($b->fechaVencimiento); ?></td>
                  </tr>
            
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
        </div>
	</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Escritorio\naviera1\resources\views/lotes/vistaLotes.blade.php ENDPATH**/ ?>