@extends('layouts.app')
@section('content')
        <div class = 'container'>
            <div class="page-header">
                <h1>Clientes <small> - Registro de Pagos</small></h1>
            </div>
            <form class = 'col s3' method = 'get' action = './controlpago_cliente/create'>
                <button class = 'btn btn-primary' type = 'submit'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Nuevo Registro</button>
            </form>
            <br>
            
            <br>
            <table class = "table table-striped table-bordered table-hover">
                <thead>
                    
                    <th class="col-sm-2">CI. del Representante</th>
                    
                    <th>Comprobante de Pago</th>
                    
                    <th>Código del Depósito</th>
                    
                    <th>Fecha de Pago</th>
                    
                    <th class="col-sm-2" style="text-align: center">Acciones</th>
                </thead>
                <tbody>
                    @foreach($controlpago_clientes as $value)
                    <tr>
                        
                        <td>{{$value->ci_representante}}</td>
                        
                        <td>{{$value->comprobante_pago}}</td>
                        
                        <td>{{$value->codigo_deposito}}</td>
                        
                        <td>{{$value->fecha_pago}}</td>
                        
                        <td style="text-align: center">
                            <a href = './controlpago_cliente/{{$value->id}}' class = 'viewShow btn btn-warning btn-sm' title="Ver"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>
                            <a href = './controlpago_cliente/{{$value->id}}/edit' class = 'viewEdit btn btn-primary btn-sm' title="Editar"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                            {{--<a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/controlpago_cliente/{{$value->id}}/deleteMsg" ><i class = 'material-icons'>delete</i></a>--}}
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
