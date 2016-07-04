@extends('layouts.app')

@section('content')
        <div class = 'container'>
            <h1>Registro_cliente Index</h1>
            <form class = 'col s3' method = 'get' action = 'http://localhost/php/railiz/transporte/public/registro_cliente/create'>
                <button class = 'btn btn-primary' type = 'submit'>Create New Registro_cliente</button>
            </form>
            <br>
            
            <br>
            <table class = "table table-striped table-bordered">
                <thead>
                    
                    <th>nombre_usuario</th>
                    
                    <th>email_usuario</th>
                    
                    <th>telefono_usuario</th>
                    
                    <th>contrasena</th>
                    
                    <th>confirmacion_contrasena</th>
                    
                    <th>pregunta_seguridad_usuario</th>
                    
                    <th>fecha_registro</th>
                    
                    <th>id_usuario</th>
                    
                    
                    <th>actions</th>
                </thead>
                <tbody>
                    @foreach($registro_clientes as $value)
                    <tr>
                        
                        <td>{{$value->nombre_usuario}}</td>
                        
                        <td>{{$value->email_usuario}}</td>
                        
                        <td>{{$value->telefono_usuario}}</td>
                        
                        <td>{{$value->contrasena}}</td>
                        
                        <td>{{$value->confirmacion_contrasena}}</td>
                        
                        <td>{{$value->pregunta_seguridad_usuario}}</td>
                        
                        <td>{{$value->fecha_registro}}</td>
                        
                        <td>{{$value->id_usuario}}</td>
                        
                        
                        <td>
                                <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/registro_cliente/{{$value->id}}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                                <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/registro_cliente/{{$value->id}}/edit'><i class = 'material-icons'>edit</i></a>
                                <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/registro_cliente/{{$value->id}}'><i class = 'material-icons'>info</i></a>
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
