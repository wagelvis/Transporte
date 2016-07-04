<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Show Controlpago_cliente</title>
    </head>
    <body>
        <div class = 'container'>
            <h1>Show Controlpago_cliente</h1>
            <br>
            <form method = 'get' action = 'http://localhost/php/railiz/transporte/public/controlpago_cliente'>
                <button class = 'btn btn-primary'>Controlpago_cliente Index</button>
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
                            <b><i>ci_representante : </i></b>
                        </td>
                        <td>{{$controlpago_cliente->ci_representante}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>comprobante_pago : </i></b>
                        </td>
                        <td>{{$controlpago_cliente->comprobante_pago}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>codigo_deposito : </i></b>
                        </td>
                        <td>{{$controlpago_cliente->codigo_deposito}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>fecha_pago : </i></b>
                        </td>
                        <td>{{$controlpago_cliente->fecha_pago}}</td>
                    </tr>
                    

                        
                </tbody>
            </table>
        </div>
    </body>
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>
