@extends('layouts.app')

@section('content')
        <div class = 'container'>
            <h1>Mensualidades_transportista Index</h1>
            <form class = 'col s3' method = 'get' action = 'http://localhost/php/railiz/transporte/public/mensualidades_transportista/create'>
                <button class = 'btn btn-primary' type = 'submit'>Create New Mensualidades_transportista</button>
            </form>
            <br>
            
            <br>
            <table class = "table table-striped table-bordered">
                <thead>
                    
                    <th>id_transportista</th>
                    
                    <th>comprobante_pago</th>
                    
                    <th>codigo_deposito</th>
                    
                    <th>fecha_pago</th>
                    
                    
                    <th>actions</th>
                </thead>
                <tbody>
                    @foreach($mensualidades_transportistas as $value)
                    <tr>
                        
                        <td>{{$value->id_transportista}}</td>
                        
                        <td>{{$value->comprobante_pago}}</td>
                        
                        <td>{{$value->codigo_deposito}}</td>
                        
                        <td>{{$value->fecha_pago}}</td>
                        
                        
                        <td>
                                <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/mensualidades_transportista/{{$value->id}}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                                <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/mensualidades_transportista/{{$value->id}}/edit'><i class = 'material-icons'>edit</i></a>
                                <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/mensualidades_transportista/{{$value->id}}'><i class = 'material-icons'>info</i></a>
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
