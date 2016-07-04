@extends('layouts.app')

@section('content')
        <div class = 'container'>
            <h1>Controlpago_cliente Index</h1>
            <form class = 'col s3' method = 'get' action = 'http://localhost/php/railiz/transporte/public/controlpago_cliente/create'>
                <button class = 'btn btn-primary' type = 'submit'>Create New Controlpago_cliente</button>
            </form>
            <br>
            
            <br>
            <table class = "table table-striped table-bordered">
                <thead>
                    
                    <th>ci_representante</th>
                    
                    <th>comprobante_pago</th>
                    
                    <th>codigo_deposito</th>
                    
                    <th>fecha_pago</th>
                    
                    
                    <th>actions</th>
                </thead>
                <tbody>
                    @foreach($controlpago_clientes as $value)
                    <tr>
                        
                        <td>{{$value->ci_representante}}</td>
                        
                        <td>{{$value->comprobante_pago}}</td>
                        
                        <td>{{$value->codigo_deposito}}</td>
                        
                        <td>{{$value->fecha_pago}}</td>
                        
                        
                        <td>
                                <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/controlpago_cliente/{{$value->id}}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                                <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/controlpago_cliente/{{$value->id}}/edit'><i class = 'material-icons'>edit</i></a>
                                <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/controlpago_cliente/{{$value->id}}'><i class = 'material-icons'>info</i></a>
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
