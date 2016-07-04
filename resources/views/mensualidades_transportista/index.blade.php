@extends('layouts.app')
@section('content')
        <div class = 'container'>
            <div class="page-header">
                <h1>Transportistas <small> - Índice de Mensualidades</small></h1>
            </div>
            <form class = 'col s3' method = 'get' action = './mensualidades_transportista/create'>
                <button class = 'btn btn-primary' type = 'submit'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Registrar Mensualidad</button>
            </form>
            <br>
            
            <br>
            <table class = "table table-striped table-bordered table-hover">
                <thead>
                    
                    <th class="col-sm-1">id</th>
                    
                    <th>Comprobante</th>
                    
                    <th>Código de Depósito</th>
                    
                    <th>Fecha de Pago</th>

                    <th class="col-sm-2" style="text-align: center">Acciones</th>
                </thead>
                <tbody>
                    @foreach($mensualidades_transportistas as $value)
                    <tr>
                        
                        <td>{{$value->id_transportista}}</td>
                        
                        <td>{{$value->comprobante_pago}}</td>
                        
                        <td>{{$value->codigo_deposito}}</td>
                        
                        <td>{{$value->fecha_pago}}</td>
                        
                        <td style="text-align: center">
                            <a href = './mensualidades_transportista/{{$value->id}}' class = 'viewShow btn btn-warning btn-xs' data-link = '/mensualidades_transportista/{{$value->id}}' class = 'viewShow btn btn-warning btn-sm' title="Ver"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>
                            <a href = './mensualidades_transportista/{{$value->id}}/edit' class = 'viewEdit btn btn-primary btn-xs' data-link = '/mensualidades_transportista/{{$value->id}}/edit' class = 'viewEdit btn btn-primary btn-sm' title="Editar"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></i></a>
                            {{--<a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/mensualidades_transportista/{{$value->id}}/deleteMsg" ><i class = 'material-icons'>delete</i></a>--}}

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
