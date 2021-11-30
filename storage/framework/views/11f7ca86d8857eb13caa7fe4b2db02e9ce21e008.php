<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Movimientos Compras</title>
    <style>
        @page  {
            margin: 0cm 0cm;
            font-family: Arial;
        }

        body {
            margin: 3cm 2cm 2cm;
        }

        header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            background-color: #8d93ab;
            color: white;
            text-align: center;
            line-height: 30px;
        }
    </style>
</head>
<body>
    <header>
        <h1>ISWT2</h1>
    </header>
    <div class="container">
        <?php $__currentLoopData = $Ingreso; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <table class="table table-hover table-dark">
                <thead>
                    <tr>
                        <th colspan="5" style="text-align: center">Ingreso: <?php echo e($i->id); ?> dia:<?php echo e($i->created_at); ?> </th>
                    </tr>
                    <tr>
                        <th colspan="5" style="text-align: center">Placa Camion: <?php echo e($i->placa); ?></th>
                    </tr>
                    <tr>
                        <th colspan="5" style="text-align: center">Conductor: <?php echo e($i->conductor); ?></th>
                    </tr>
                    <tr>
                        <th colspan="5" style="text-align: center">Contenedor: <?php echo e($i->numeroContenedor); ?></th>
                    </tr>
                    <tr>
                        <th scope="col">Producto</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Fecha Vencimiento</th>
                        <th scope="col">Peso Total(kg)</th>
                        <th scope="col">Total $</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $lotes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                            <td><?php echo e(App\producto::find($l->idProdcuto)->nombre); ?></td>
                            <td><?php echo e($l->cantidadProducto); ?></td>
                            <td><?php echo e($l->fechaVencimiento); ?></td>
                            <td><?php echo e($l->pesoTotal); ?>kg</td>
                            <td>$<?php echo e($l->total); ?></td>
                            </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                </tbody>
            </table>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
    </div>
</body>
</html><?php /**PATH D:\Escritorio\naviera1\resources\views/PDF/NotaDeIngreso.blade.php ENDPATH**/ ?>