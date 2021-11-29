<?php $__env->startSection('content'); ?>
	<div class="container">
        <div class="row">
            <?php $__currentLoopData = $bahia; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
                <div class="col-sm-4">
                    
                        <?php if($b->estado == "Activo"): ?>
                            <div class="card text-white bg-danger mb-3" style="width: 18rem;">
                        <?php else: ?>
                            <div class="card text-white bg-success mb-3" style="width: 18rem;">   
                        <?php endif; ?>
                        <img class="card-img-top" src="<?php echo e(asset('dist/img/bahia.jpg')); ?>" alt="Card image cap">
                            <div class="card-body">
                            <h5 class="card-title">Bahia # <?php echo e($b->id); ?></h5>
                            <p class="card-text">Estado: <?php echo e($b->estado); ?></p>
                        
                        <?php if($b->estado == "Activo"): ?>
                            <form method="POST" action="<?php echo e(route('bah.store')); ?>">
                                    <?php echo csrf_field(); ?> 
                                <input type="text" class="form-control" id="bahia" name="bahia" maxlength="25" value ="<?php echo e($b->id); ?>" hidden >
                                <button id="btmsubmitC" name="btmsubmitC" type="submit" class="btn btn-primary" >Terminar proceso</button>
                            </form>                        
                        <?php endif; ?>
                            
                        </div>
                    </div>
                </div>
            
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Escritorio\naviera1\resources\views/bahia/Vistabahia.blade.php ENDPATH**/ ?>