<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Edit Cotizaciones_transportista</title>
    </head>
    <body>
        <div class = 'container'>
            <h1>Edit Cotizaciones_transportista</h1>
            <form method = 'get' action = 'http://localhost/php/railiz/transporte/public/cotizaciones_transportista'>
                <button class = 'btn btn-danger'>Cotizaciones_transportista Index</button>
            </form>
            <br>
            <form method = 'POST' action = 'http://localhost/php/railiz/transporte/public/cotizaciones_transportista/{{$cotizaciones_transportista->id}}/update'>
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                
                <div class="form-group">
                    <label for="id_transportista">id_transportista</label>
                    <input id="id_transportista" name = "id_transportista" type="text" class="form-control" value="{{$cotizaciones_transportista->id_transportista}}">
                </div>
                
                <div class="form-group">
                    <label for="comprobante_pago">comprobante_pago</label>
                    <input id="comprobante_pago" name = "comprobante_pago" type="text" class="form-control" value="{{$cotizaciones_transportista->comprobante_pago}}">
                </div>
                
                <div class="form-group">
                    <label for="codigo_deposito">codigo_deposito</label>
                    <input id="codigo_deposito" name = "codigo_deposito" type="text" class="form-control" value="{{$cotizaciones_transportista->codigo_deposito}}">
                </div>
                
                <div class="form-group">
                    <label for="fecha_pago">fecha_pago</label>
                    <input id="fecha_pago" name = "fecha_pago" type="text" class="form-control" value="{{$cotizaciones_transportista->fecha_pago}}">
                </div>
                
                
                <button class = 'btn btn-primary' type ='submit'>Update</button>
            </form>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>
