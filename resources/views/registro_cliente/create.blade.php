<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Create Registro_cliente</title>
    </head>
    <body>
        <div class = 'container'>
            <h1>Create Registro_cliente</h1>
            <form method = 'get' action = 'http://localhost/php/railiz/transporte/public/registro_cliente'>
                <button class = 'btn btn-danger'>Registro_cliente Index</button>
            </form>
            <br>
            <form method = 'POST' action = 'http://localhost/php/railiz/transporte/public/registro_cliente'>
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                
                <div class="form-group">
                    <label for="nombre_usuario">nombre_usuario</label>
                    <input id="nombre_usuario" name = "nombre_usuario" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="email_usuario">email_usuario</label>
                    <input id="email_usuario" name = "email_usuario" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="telefono_usuario">telefono_usuario</label>
                    <input id="telefono_usuario" name = "telefono_usuario" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="contrase&ntilde;a">contrase&ntilde;a</label>
                    <input id="contrase&ntilde;a" name = "contrase&ntilde;a" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="confirmacion_contrase&ntilde;a">confirmacion_contrase&ntilde;a</label>
                    <input id="confirmacion_contrase&ntilde;a" name = "confirmacion_contrase&ntilde;a" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="pregunta_seguridad_usuario">pregunta_seguridad_usuario</label>
                    <input id="pregunta_seguridad_usuario" name = "pregunta_seguridad_usuario" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="fecha_registro">fecha_registro</label>
                    <input id="fecha_registro" name = "fecha_registro" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="id_usuario">id_usuario</label>
                    <input id="id_usuario" name = "id_usuario" type="text" class="form-control">
                </div>
                
                
                <button class = 'btn btn-primary' type ='submit'>Create</button>
            </form>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>
