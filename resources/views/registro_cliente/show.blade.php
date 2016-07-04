<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Show Registro_cliente</title>
    </head>
    <body>
        <div class = 'container'>
            <h1>Show Registro_cliente</h1>
            <br>
            <form method = 'get' action = 'http://localhost/php/railiz/transporte/public/registro_cliente'>
                <button class = 'btn btn-primary'>Registro_cliente Index</button>
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
                            <b><i>nombre_usuario : </i></b>
                        </td>
                        <td>{{$registro_cliente->nombre_usuario}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>email_usuario : </i></b>
                        </td>
                        <td>{{$registro_cliente->email_usuario}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>telefono_usuario : </i></b>
                        </td>
                        <td>{{$registro_cliente->telefono_usuario}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>contrase&ntilde;a : </i></b>
                        </td>
                        <td>{{$registro_cliente->contrase&ntilde;a}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>confirmacion_contrase&ntilde;a : </i></b>
                        </td>
                        <td>{{$registro_cliente->confirmacion_contrase&ntilde;a}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>pregunta_seguridad_usuario : </i></b>
                        </td>
                        <td>{{$registro_cliente->pregunta_seguridad_usuario}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>fecha_registro : </i></b>
                        </td>
                        <td>{{$registro_cliente->fecha_registro}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>id_usuario : </i></b>
                        </td>
                        <td>{{$registro_cliente->id_usuario}}</td>
                    </tr>
                    

                        
                </tbody>
            </table>
        </div>
    </body>
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>
