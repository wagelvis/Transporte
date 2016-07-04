@extends('layouts.app')
@section('content')
        <div class = 'container'>
            <div class="page-header">
                <h1>Transportistas <small> - Índice de Registros</small></h1>
            </div>
            <form class = 'col s3' method = 'get' action = './registro_transportistum/create'>
                <button class = 'btn btn-primary' type = 'submit'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Nuevo Registro</button>
            </form>
            <br>
            
            <br>

            <table class = "table table-striped table-bordered table-hover">
                <thead>
                    <th class="col-sm-1">id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Sector</th>
                    <th>Colegio</th>
                    <th>Fecha de Registro</th>
                    <th class="col-sm-2" style="text-align: cen">Acciones</th>
                </thead>
                <tbody>
                    @foreach($registro_transportistas as $value)
                    <tr>
                        <td>{{$value->id}}</td>
                        <td>{{$value->nombre_transportista}}</td>
                        <td>{{$value->apellido_transportista}}</td>
                        <td>{{$value->sector_ruta}}</td>
                        <td>{{$value->colegios_ruta}}</td>
                        <td>{{$value->fecha_registro}}</td>
                        <td style="text-align: center;">
                            <a href = './registro_transportistum/{{$value->id}}' class = 'viewShow btn btn-warning btn-sm' title="Ver"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>
                            <a href = './registro_transportistum/{{$value->id}}/edit' class = 'viewEdit btn btn-primary btn-sm' title="Editar"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></i></a>
                            {{--<a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-sm' data-link = "/registro_transportistum/{{$value->id}}/deleteMsg" ><i class = 'material-icons'>Eliminar</i></a>--}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class = 'AjaxisModal'>
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Mensaje de Confirmación</h4>
                    </div>
                    <div class="modal-body">
                        <p>¿ Desea Eliminar el Registro ?</p>
                    </div>
                    <div class="modal-footer">
                        <div class="col-md-6">
                            <button type="button" class="btn btn-default btn-block" data-dismiss="modal">NO</button>
                        </div>
                        <div class="col-md-6">
                            <button type="button" class="btn btn-danger btn-block">SI</button>
                        </div>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>
    </div>
@endsection
