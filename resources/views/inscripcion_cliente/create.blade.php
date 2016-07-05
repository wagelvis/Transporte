@extends('layouts.app')
@section('content')
        <div class = 'container'>
            <div class="page-header">
                <h1>Clientes <small> - Crear Registro de Inscripción</small></h1>
            </div>
            <form method = 'get' action = '../inscripcion_cliente'>
                <button class = 'btn btn-default'><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> Regresar</button>
            </form>
            <br>
            <div class="row">
                <form method = 'POST' action = '../inscripcion_cliente'>
                    <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="id_usuario">id</label>
                            <input id="id_usuario" name = "id_usuario" type="text" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="nombre_estudiante">Nombre del Estudiante</label>
                            <input id="nombre_estudiante" name = "nombre_estudiante" type="text" class="form-control" placeholder="Juan" required>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="apellido_estudiante">Apellido del Estudiante</label>
                            <input id="apellido_estudiante" name = "apellido_estudiante" type="text" class="form-control" placeholder="Pérez" required>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="sector_ruta">Sector - Ruta</label>
                            <input id="sector_ruta" name = "sector_ruta" type="text" class="form-control" placeholder="Urbanización/Barrio/Sector" required>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="calle_ruta">Calle - Ruta</label>
                            <input id="calle_ruta" name = "calle_ruta" type="text" class="form-control" placeholder="Av/Calle" required>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="casa_ruta">Casa - Ruta</label>
                            <input id="casa_ruta" name = "casa_ruta" type="text" class="form-control" placeholder="Nº Casa/Apartamento" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="colegio_estudiante">Colegio del Estudiante</label>
                            <input id="colegio_estudiante" name = "colegio_estudiante" type="text" class="form-control" placeholder="Nombre del Colegio" required>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="grado_estudiante">Grado del Estudiante</label>
                            {{--<input id="grado_estudiante" name = "grado_estudiante" type="text" class="form-control">--}}
                            <select name="grado_estudiante" id="grado_estudiante" class="form-control" required>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="seccion_estudiante">Sección del Estudiante</label>
                            {{--<input id="seccion_estudiante" name = "seccion_estudiante" type="text" class="form-control">--}}
                            <select name="seccion_estudiante" id="seccion_estudiante" class="form-control" required>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="telefono_estudiante">Teléfono del Estudiante</label>
                            <input id="telefono_estudiante" name = "telefono_estudiante" type="text" class="form-control" placeholder="02431234567" required>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="nombre_representante">Nombre del Representante</label>
                            <input id="nombre_representante" name = "nombre_representante" type="text" class="form-control" placeholder="Maria" required>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="apellido_representante">Apellido del Representante</label>
                            <input id="apellido_representante" name = "apellido_representante" type="text" class="form-control" placeholder="Pérez" required>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="ci_representante">CI. de Representante</label>
                            <input id="ci_representante" name = "ci_representante" type="text" class="form-control" placeholder="V80123456" required>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="telefono_representante">Teléfono del Representante</label>
                            <input id="telefono_representante" name = "telefono_representante" type="text" class="form-control" placeholder="02431234567" required>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="fecha_inscripcion">Fecha de Inscripción</label>
                            <input id="fecha_inscripcion" name = "fecha_inscripcion" type="date" class="form-control" required>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="contrato_inscripcion">Contrato de Inscripción</label>
                            <input id="contrato_inscripcion" name = "contrato_inscripcion" type="text" class="form-control" placeholder="xxxxxxxxxx" required>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <button class = 'btn btn-success btn-lg' type ='submit'><span class="glyphicon glyphicon-floppy-saved" aria-hidden="true"></span> Guardar Registro</button>
                    </div>
                </form>
            </div>
        </div>
@endsection
