@extends('layouts.app')
@section('content')
        <div class = 'container'>
            <div class="page-header">
                <h1>Clientes <small> - Editar Registro de Inscripción</small></h1>
            </div>
            <form method = 'get' action = '../../inscripcion_cliente'>
                <button class = 'btn btn-default'><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>Regresar</button>
            </form>
            <br>
            <form method = 'POST' action = '../../inscripcion_cliente/{{$inscripcion_cliente->id}}/update'>
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="id_usuario">id</label>
                        <input id="id_usuario" name = "id_usuario" type="text" class="form-control" value="{{$inscripcion_cliente->id_usuario}}">
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="form-group">
                        <label for="nombre_estudiante">Nombre del Estudiante</label>
                        <input id="nombre_estudiante" name = "nombre_estudiante" type="text" class="form-control" value="{{$inscripcion_cliente->nombre_estudiante}}">
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="form-group">
                        <label for="apellido_estudiante">Apellido del Estudiante</label>
                        <input id="apellido_estudiante" name = "apellido_estudiante" type="text" class="form-control" value="{{$inscripcion_cliente->apellido_estudiante}}">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="sector_ruta">Sector - Ruta</label>
                        <input id="sector_ruta" name = "sector_ruta" type="text" class="form-control" value="{{$inscripcion_cliente->sector_ruta}}">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="calle_ruta">Calle - Ruta</label>
                        <input id="calle_ruta" name = "calle_ruta" type="text" class="form-control" value="{{$inscripcion_cliente->calle_ruta}}">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="casa_ruta">Casa - Ruta</label>
                        <input id="casa_ruta" name = "casa_ruta" type="text" class="form-control" value="{{$inscripcion_cliente->casa_ruta}}">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="colegio_estudiante">Colegio del Estudiante</label>
                        <input id="colegio_estudiante" name = "colegio_estudiante" type="text" class="form-control" value="{{$inscripcion_cliente->colegio_estudiante}}">
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label for="grado_estudiante">Grado del Estudiante</label>
                        <input id="grado_estudiante" name = "grado_estudiante" type="text" class="form-control" value="{{$inscripcion_cliente->grado_estudiante}}">
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label for="seccion_estudiante">Sección del Estudiante</label>
                        <input id="seccion_estudiante" name = "seccion_estudiante" type="text" class="form-control" value="{{$inscripcion_cliente->seccion_estudiante}}">
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label for="telefono_estudiante">Teléfono del Estudiante</label>
                        <input id="telefono_estudiante" name = "telefono_estudiante" type="text" class="form-control" value="{{$inscripcion_cliente->telefono_estudiante}}">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="nombre_representante">Nombre del Representante</label>
                        <input id="nombre_representante" name = "nombre_representante" type="text" class="form-control" value="{{$inscripcion_cliente->nombre_representante}}">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="apellido_representante">Apellido del Representante</label>
                        <input id="apellido_representante" name = "apellido_representante" type="text" class="form-control" value="{{$inscripcion_cliente->apellido_representante}}">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="ci_representante">CI. de Representante</label>
                        <input id="ci_representante" name = "ci_representante" type="text" class="form-control" value="{{$inscripcion_cliente->ci_representante}}">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="telefono_representante">Teléfono del Representante</label>
                        <input id="telefono_representante" name = "telefono_representante" type="text" class="form-control" value="{{$inscripcion_cliente->telefono_representante}}">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="fecha_inscripcion">Fecha de Inscripción</label>
                        <input id="fecha_inscripcion" name = "fecha_inscripcion" type="date" class="form-control" value="{{$inscripcion_cliente->fecha_inscripcion}}">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="contrato_inscripcion">Contrato de Inscripción</label>
                        <input id="contrato_inscripcion" name = "contrato_inscripcion" type="text" class="form-control" value="{{$inscripcion_cliente->contrato_inscripcion}}">
                    </div>
                </div>


                <div class="col-md-12">
                    <button class = 'btn btn-success btn-lg' type ='submit'><span class="glyphicon glyphicon-floppy-saved" aria-hidden="true"></span> Guardar Registro</button>
                </div>
            </form>
        </div>
@endsection
