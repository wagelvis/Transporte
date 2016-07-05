@extends('layouts.app')
@section('content')
        <div class = 'container'>
            <div class="page-header">
                <h1>Clientes <small> - Información del Registro de Inscripción</small></h1>
            </div>
            <br>
            <form method = 'get' action = '../inscripcion_cliente'>
                <button class = 'btn btn-default'><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>Regresar</button>
            </form>
            <br>
            <table class = 'table table-bordered table-hover'>
                <thead>
                    <th class="col-md-6 info">Campo</th>
                    <th class="col-md-6 info">Datos del Registro</th>
                </thead>
                <tbody>

                    <tr>
                        <td>
                            <b><i>id: </i></b>
                        </td>
                        <td>{{$inscripcion_cliente->id_usuario}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Nombre del Estudiante: </i></b>
                        </td>
                        <td>{{$inscripcion_cliente->nombre_estudiante}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Apellido del Estudiante: </i></b>
                        </td>
                        <td>{{$inscripcion_cliente->apellido_estudiante}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Sector: </i></b>
                        </td>
                        <td>{{$inscripcion_cliente->sector_ruta}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Calle: </i></b>
                        </td>
                        <td>{{$inscripcion_cliente->calle_ruta}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Casa: </i></b>
                        </td>
                        <td>{{$inscripcion_cliente->casa_ruta}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Colegio: </i></b>
                        </td>
                        <td>{{$inscripcion_cliente->colegio_estudiante}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Grado: </i></b>
                        </td>
                        <td>{{$inscripcion_cliente->grado_estudiante}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Sección: </i></b>
                        </td>
                        <td>{{$inscripcion_cliente->seccion_estudiante}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Teléfono del Estudiante: </i></b>
                        </td>
                        <td>{{$inscripcion_cliente->telefono_estudiante}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Nombre del Representante: </i></b>
                        </td>
                        <td>{{$inscripcion_cliente->nombre_representante}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Apellido del Representante: </i></b>
                        </td>
                        <td>{{$inscripcion_cliente->apellido_representante}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>CI. del Representante: </i></b>
                        </td>
                        <td>{{$inscripcion_cliente->ci_representante}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Teléfono del Representante: </i></b>
                        </td>
                        <td>{{$inscripcion_cliente->telefono_representante}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Fecha de Inscripción: </i></b>
                        </td>
                        <td>{{$inscripcion_cliente->fecha_inscripcion}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Contrato de Inscripción: </i></b>
                        </td>
                        <td>{{$inscripcion_cliente->contrato_inscripcion}}</td>
                    </tr>

                    <tr>
                        <td>
                            <b><i>Fecha de Creación: </i></b>
                        </td>
                        <td>{{$inscripcion_cliente->created_at}}</td>
                    </tr>

                    <tr>
                        <td>
                            <b><i>Fecha de Actualización: </i></b>
                        </td>
                        <td>{{$inscripcion_cliente->updated_at}}</td>
                    </tr>
                        
                </tbody>
            </table>
        </div>
@endsection
