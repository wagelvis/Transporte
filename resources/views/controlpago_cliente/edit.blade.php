<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Edit Controlpago_cliente</title>
    </head>
    <body>
        <div class = 'container'>
            <h1>Edit Controlpago_cliente</h1>
            <form method = 'get' action = 'http://localhost/php/railiz/transporte/public/controlpago_cliente'>
                <button class = 'btn btn-danger'>Controlpago_cliente Index</button>
            </form>
            <br>
            <form method = 'POST' action = 'http://localhost/php/railiz/transporte/public/controlpago_cliente/{{$controlpago_cliente->id}}/update'>
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                
                <div class="form-group">
                    <label for="ci_representante">ci_representante</label>
                    <input id="ci_representante" name = "ci_representante" type="text" class="form-control" value="{{$controlpago_cliente->ci_representante}}">
                </div>
                
                <div class="form-group">
                    <label for="comprobante_pago">comprobante_pago</label>
                    <input id="comprobante_pago" name = "comprobante_pago" type="text" class="form-control" value="{{$controlpago_cliente->comprobante_pago}}">
                </div>
                
                <div class="form-group">
                    <label for="codigo_deposito">codigo_deposito</label>
                    <input id="codigo_deposito" name = "codigo_deposito" type="text" class="form-control" value="{{$controlpago_cliente->codigo_deposito}}">
                </div>
                
                <div class="form-group">
                    <label for="fecha_pago">fecha_pago</label>
                    <input id="fecha_pago" name = "fecha_pago" type="text" class="form-control" value="{{$controlpago_cliente->fecha_pago}}">
                </div>
                
                
                <button class = 'btn btn-primary' type ='submit'>Update</button>
            </form>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>
