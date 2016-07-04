<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Edit Inscripcion_cliente</title>
    </head>
    <body>
        <div class = 'container'>
            <h1>Edit Inscripcion_cliente</h1>
            <form method = 'get' action = 'http://localhost/php/railiz/transporte/public/inscripcion_cliente'>
                <button class = 'btn btn-danger'>Inscripcion_cliente Index</button>
            </form>
            <br>
            <form method = 'POST' action = 'http://localhost/php/railiz/transporte/public/inscripcion_cliente/{{$inscripcion_cliente->id}}/update'>
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                
                <div class="form-group">
                    <label for="nombre_estudiante">nombre_estudiante</label>
                    <input id="nombre_estudiante" name = "nombre_estudiante" type="text" class="form-control" value="{{$inscripcion_cliente->nombre_estudiante}}">
                </div>
                
                <div class="form-group">
                    <label for="apellido_estudiante">apellido_estudiante</label>
                    <input id="apellido_estudiante" name = "apellido_estudiante" type="text" class="form-control" value="{{$inscripcion_cliente->apellido_estudiante}}">
                </div>
                
                <div class="form-group">
                    <label for="sector_ruta">sector_ruta</label>
                    <input id="sector_ruta" name = "sector_ruta" type="text" class="form-control" value="{{$inscripcion_cliente->sector_ruta}}">
                </div>
                
                <div class="form-group">
                    <label for="calle_ruta">calle_ruta</label>
                    <input id="calle_ruta" name = "calle_ruta" type="text" class="form-control" value="{{$inscripcion_cliente->calle_ruta}}">
                </div>
                
                <div class="form-group">
                    <label for="casa_ruta">casa_ruta</label>
                    <input id="casa_ruta" name = "casa_ruta" type="text" class="form-control" value="{{$inscripcion_cliente->casa_ruta}}">
                </div>
                
                <div class="form-group">
                    <label for="colegio_estudiante">colegio_estudiante</label>
                    <input id="colegio_estudiante" name = "colegio_estudiante" type="text" class="form-control" value="{{$inscripcion_cliente->colegio_estudiante}}">
                </div>
                
                <div class="form-group">
                    <label for="grado_estudiante">grado_estudiante</label>
                    <input id="grado_estudiante" name = "grado_estudiante" type="text" class="form-control" value="{{$inscripcion_cliente->grado_estudiante}}">
                </div>
                
                <div class="form-group">
                    <label for="seccion_estudiante">seccion_estudiante</label>
                    <input id="seccion_estudiante" name = "seccion_estudiante" type="text" class="form-control" value="{{$inscripcion_cliente->seccion_estudiante}}">
                </div>
                
                <div class="form-group">
                    <label for="telefono_estudiante">telefono_estudiante</label>
                    <input id="telefono_estudiante" name = "telefono_estudiante" type="text" class="form-control" value="{{$inscripcion_cliente->telefono_estudiante}}">
                </div>
                
                <div class="form-group">
                    <label for="nombre_representante">nombre_representante</label>
                    <input id="nombre_representante" name = "nombre_representante" type="text" class="form-control" value="{{$inscripcion_cliente->nombre_representante}}">
                </div>
                
                <div class="form-group">
                    <label for="apellido_representante">apellido_representante</label>
                    <input id="apellido_representante" name = "apellido_representante" type="text" class="form-control" value="{{$inscripcion_cliente->apellido_representante}}">
                </div>
                
                <div class="form-group">
                    <label for="ci_representante">ci_representante</label>
                    <input id="ci_representante" name = "ci_representante" type="text" class="form-control" value="{{$inscripcion_cliente->ci_representante}}">
                </div>
                
                <div class="form-group">
                    <label for="id_usuario">id_usuario</label>
                    <input id="id_usuario" name = "id_usuario" type="text" class="form-control" value="{{$inscripcion_cliente->id_usuario}}">
                </div>
                
                <div class="form-group">
                    <label for="telefono_representante">telefono_representante</label>
                    <input id="telefono_representante" name = "telefono_representante" type="text" class="form-control" value="{{$inscripcion_cliente->telefono_representante}}">
                </div>
                
                <div class="form-group">
                    <label for="fecha_inscripcion">fecha_inscripcion</label>
                    <input id="fecha_inscripcion" name = "fecha_inscripcion" type="text" class="form-control" value="{{$inscripcion_cliente->fecha_inscripcion}}">
                </div>
                
                <div class="form-group">
                    <label for="contrato_inscripcion">contrato_inscripcion</label>
                    <input id="contrato_inscripcion" name = "contrato_inscripcion" type="text" class="form-control" value="{{$inscripcion_cliente->contrato_inscripcion}}">
                </div>
                
                
                <button class = 'btn btn-primary' type ='submit'>Update</button>
            </form>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</html>
