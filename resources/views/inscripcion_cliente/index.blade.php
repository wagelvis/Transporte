@extends('layouts.app')
@section('content')
        <div class = 'container'>
            <div class="page-header">
                <h1>Clientes <small> - Índice de Registros de Inscripción</small></h1>
            </div>
            <form class = 'col s3' method = 'get' action = './inscripcion_cliente/create'>
                <button class = 'btn btn-primary' type = 'submit'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Nuevo Registro</button>
            </form>
            <br>
            
            <br>
            <table class = "table table-striped table-bordered table-hover">
                <thead>

                    <th>id</th>
                    
                    <th>Nombre Estudiante</th>
                    
                    <th>Apellido Estudiante</th>
                    
                    <th>Colegio</th>
                    
                    <th>Nombre Representante</th>
                    
                    <th>Apellido Representante</th>
                    
                    <th>Fecha de Inscripción</th>
                    
                    <th>Nº Contrato</th>

                    <th style="text-align: center">Acciones</th>
                </thead>
                <tbody>
                    @foreach($inscripcion_clientes as $value)
                    <tr>

                        <td>{{$value->id_usuario}}</td>
                        
                        <td>{{$value->nombre_estudiante}}</td>
                        
                        <td>{{$value->apellido_estudiante}}</td>
                        
                        <td>{{$value->colegio_estudiante}}</td>
                        
                        <td>{{$value->nombre_representante}}</td>
                        
                        <td>{{$value->apellido_representante}}</td>
                        
                        <td>{{$value->fecha_inscripcion}}</td>
                        
                        <td>{{$value->contrato_inscripcion}}</td>
                        
                        <td style="text-align: center">
                            <a href = './inscripcion_cliente/{{$value->id}}' class = 'viewShow btn btn-warning btn-sm' title="Ver"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>
                            <a href = './inscripcion_cliente/{{$value->id}}/edit' class = 'viewEdit btn btn-primary btn-sm' title="Editar"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                            {{--<a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/inscripcion_cliente/{{$value->id}}/deleteMsg" ><i class = 'material-icons'>delete</i></a>--}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class = 'AjaxisModal'>
        </div>
    </div>
        @endsection
