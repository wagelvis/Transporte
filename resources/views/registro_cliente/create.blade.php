@extends('layouts.app')
@section('content')
        <div class = 'container'>
            <div class="page-header">
                <h1>Clientes <small> - Crear Registro</small></h1>
            </div>
            <form method = 'get' action = '../registro_cliente'>
                <button class = 'btn btn-default'><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> Regresar</button>
            </form>
            <br>
            <div class="row">
                <form method = 'POST' action = 'http://localhost/php/railiz/transporte/public/registro_cliente'>
                    <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="id_usuario">id</label>
                            <input id="id_usuario" name = "id_usuario" type="text" class="form-control" required>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="nombre_usuario">Nombre del Usuario</label>
                            <input id="nombre_usuario" name = "nombre_usuario" type="text" class="form-control" placeholder="Pedro Perez" required>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="email_usuario">Correo Electrónico</label>
                            <input id="email_usuario" name = "email_usuario" type="email" class="form-control" placeholder="nombre@emp.com" required>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="telefono_usuario">Teléfono del Usuario</label>
                            <input id="telefono_usuario" name = "telefono_usuario" type="text" class="form-control" required>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="contrasena">Contraseña</label>
                            <input id="contrasena" name = "contrasena" type="password" class="form-control" required>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="confirmacion_contrasena">Confirmación de Contraseña</label>
                            <input id="confirmacion_contrasena" name = "confirmacion_contrasena" type="password" class="form-control" required>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="pregunta_seguridad_usuario">Pregunta de Seguridad</label>
                            <input id="pregunta_seguridad_usuario" name = "pregunta_seguridad_usuario" type="text" class="form-control" required>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="fecha_registro">Fecha de Registro</label>
                            <input id="fecha_registro" name = "fecha_registro" type="date" class="form-control" required>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <button class = 'btn btn-success btn-lg' type ='submit'><span class="glyphicon glyphicon-floppy-saved" aria-hidden="true"></span> Guardar Registro</button>
                    </div>
                </form>
            </div>
        </div>
@endsection
