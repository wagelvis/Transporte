<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Show Mensualidades_transportista</title>
    </head>
    <body>
        <div class = 'container'>
            <h1>Show Mensualidades_transportista</h1>
            <br>
            <form method = 'get' action = 'http://localhost/php/railiz/transporte/public/mensualidades_transportista'>
                <button class = 'btn btn-primary'>Mensualidades_transportista Index</button>
            </form>
            <br>
            <table class = 'table table-bordered'>
                <thead>
                    <th>Key</th>
                    <th>Value</th>
                </thead>
                <tbody>

                    
                    <tr>
                        <td>
                            <b><i>id_transportista : </i></b>
                        </td>
                        <td>{{$mensualidades_transportista->id_transportista}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>comprobante_pago : </i></b>
                        </td>
                        <td>{{$mensualidades_transportista->comprobante_pago}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>codigo_deposito : </i></b>
                        </td>
                        <td>{{$mensualidades_transportista->codigo_deposito}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>fecha_pago : </i></b>
                        </td>
                        <td>{{$mensualidades_transportista->fecha_pago}}</td>
                    </tr>
                    

                        
                </tbody>
            </table>
        </div>
    </body>
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>
