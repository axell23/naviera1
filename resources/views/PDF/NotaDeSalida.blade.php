<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Movimientos Compras</title>
    <style>
        @page {
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
        @foreach ($Salidas as $i)

            <table class="table table-hover table-dark">
                <thead>
                    <tr>
                        <th colspan="5" style="text-align: center">Salida: {{$i->id}} dia:{{$i->created_at}} </th>
                    </tr>
                    <tr>
                        <th colspan="5" style="text-align: center">Placa Camion: {{$i->placa}}</th>
                    </tr>
                    <tr>
                        <th colspan="5" style="text-align: center">Conductor: {{$i->conductor}}</th>
                    </tr>
                    <tr>
                        <th colspan="5" style="text-align: center">Cliente: {{$i->Cliente}}</th>
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
                    @foreach ($lotes as $l)
                            <tr>
                            <td>{{App\producto::find($l->idProdcuto)->nombre}}</td>
                            <td>{{$l->cantidadProducto}}</td>
                            <td>{{$l->fechaVencimiento}}</td>
                            <td>{{$l->pesoTotal}}kg</td>
                            <td>${{$l->total}}</td>
                            </tr>
                    @endforeach  
                </tbody>
            </table>
        @endforeach   
    </div>
</body>
</html>