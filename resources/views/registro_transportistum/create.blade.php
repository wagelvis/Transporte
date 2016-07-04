@extends('layouts.app')

@section('content')
        <div class = 'container'>
            <div class="page-header">
                <h1>Transportistas <small> - Crear Registro</small></h1>
            </div>
            <form method = 'get' action = '../registro_transportistum'>
                <button class = 'btn btn-default'><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> Regresar</button>
            </form>
            <br>
            <div class="row">
                <form method = 'POST' action = '../registro_transportistum'>
                    <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nombre_transportista">Nombre</label>
                            <input id="nombre_transportista" name = "nombre_transportista" type="text" class="form-control" placeholder="Juan" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="apellido_transportista">Apellido</label>
                            <input id="apellido_transportista" name = "apellido_transportista" type="text" class="form-control" placeholder="Perez" required>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="contrasena_transportista">Contraseña</label>
                            <input id="contrasena_transportista" name = "contrasena_transportista" type="password" class="form-control" placeholder="********" required>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="confirmacion_contrasena">Confirmación Contraseña</label>
                            <input id="confirmacion_contrasena" name = "confirmacion_contrasena" type="password" class="form-control" placeholder="********" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="pregunta_seguridad">Pregunta de Seguridad</label>
                            <input id="pregunta_seguridad" name = "pregunta_seguridad" type="text" class="form-control" placeholder="Mi Mascota" required>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="sector_ruta">Sector de Ruta</label>
                            <input id="sector_ruta" name = "sector_ruta" type="text" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="colegios_ruta">Colegios Ruta</label>
                            <input id="colegios_ruta" name = "colegios_ruta" type="text" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="fecha_registro">Fecha de Registro</label>
                            <input id="fecha_registro" name = "fecha_registro" type="date" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <button class = 'btn btn-success btn-lg' type ='submit'><span class="glyphicon glyphicon-floppy-saved" aria-hidden="true"></span> Guardar Registro</button>
                    </div>
                </form>
            </div>
            <br>
        </div>
@endsection
