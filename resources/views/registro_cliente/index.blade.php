@extends('layouts.app')

@section('content')
        <div class = 'container'>
            <div class="page-header">
                <h1>Clientes <small> - Índice de Registros</small></h1>
            </div>
            <form class = 'col s3' method = 'get' action = './registro_cliente/create'>
                <button class = 'btn btn-primary' type = 'submit'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Nuevo Registro</button>
            </form>
            <br>
            
            <br>
            <table class = "table table-striped table-bordered table-hover">
                <thead>

                    <th class="col-sm-1">id</th>
                    
                    <th>Nombre del Usuario</th>
                    
                    <th>Correo Electrónico</th>
                    
                    <th>Teléfono</th>
                    
                    <th>Fecha de Registro</th>
                    
                    <th class="col-sm-2" style="text-align: center">Acciones</th>
                </thead>
                <tbody>
                    @foreach($registro_clientes as $value)
                    <tr>

                        <td>{{$value->id_usuario}}</td>
                        
                        <td>{{$value->nombre_usuario}}</td>
                        
                        <td>{{$value->email_usuario}}</td>
                        
                        <td>{{$value->telefono_usuario}}</td>
                        
                        <td>{{$value->fecha_registro}}</td>

                        <td style="text-align: center">
                            <a href = './registro_cliente/{{$value->id}}' class = 'viewShow btn btn-warning btn-sm' title="Ver"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>
                            <a href = './registro_cliente/{{$value->id}}/edit' class = 'viewEdit btn btn-primary btn-sm' title="Editar"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></i></a>
                            {{--<a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/registro_cliente/{{$value->id}}/deleteMsg" ><i class = 'material-icons'>delete</i></a>--}}
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
