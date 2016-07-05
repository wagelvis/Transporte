@extends('layouts.app')
@section('content')
        <div class = 'container'>
            <h1>Inscripcion_cliente Index</h1>
            <form class = 'col s3' method = 'get' action = 'http://localhost/php/railiz/transporte/public/inscripcion_cliente/create'>
                <button class = 'btn btn-primary' type = 'submit'>Create New Inscripcion_cliente</button>
            </form>
            <br>
            
            <br>
            <table class = "table table-striped table-bordered">
                <thead>
                    
                    <th>nombre_estudiante</th>
                    
                    <th>apellido_estudiante</th>
                    
                    <th>sector_ruta</th>
                    
                    <th>calle_ruta</th>
                    
                    <th>casa_ruta</th>
                    
                    <th>colegio_estudiante</th>
                    
                    <th>grado_estudiante</th>
                    
                    <th>seccion_estudiante</th>
                    
                    <th>telefono_estudiante</th>
                    
                    <th>nombre_representante</th>
                    
                    <th>apellido_representante</th>
                    
                    <th>ci_representante</th>
                    
                    <th>id_usuario</th>
                    
                    <th>telefono_representante</th>
                    
                    <th>fecha_inscripcion</th>
                    
                    <th>contrato_inscripcion</th>
                    
                    
                    <th>actions</th>
                </thead>
                <tbody>
                    @foreach($inscripcion_clientes as $value)
                    <tr>
                        
                        <td>{{$value->nombre_estudiante}}</td>
                        
                        <td>{{$value->apellido_estudiante}}</td>
                        
                        <td>{{$value->sector_ruta}}</td>
                        
                        <td>{{$value->calle_ruta}}</td>
                        
                        <td>{{$value->casa_ruta}}</td>
                        
                        <td>{{$value->colegio_estudiante}}</td>
                        
                        <td>{{$value->grado_estudiante}}</td>
                        
                        <td>{{$value->seccion_estudiante}}</td>
                        
                        <td>{{$value->telefono_estudiante}}</td>
                        
                        <td>{{$value->nombre_representante}}</td>
                        
                        <td>{{$value->apellido_representante}}</td>
                        
                        <td>{{$value->ci_representante}}</td>
                        
                        <td>{{$value->id_usuario}}</td>
                        
                        <td>{{$value->telefono_representante}}</td>
                        
                        <td>{{$value->fecha_inscripcion}}</td>
                        
                        <td>{{$value->contrato_inscripcion}}</td>
                        
                        
                        <td>
                                <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/inscripcion_cliente/{{$value->id}}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                                <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/inscripcion_cliente/{{$value->id}}/edit'><i class = 'material-icons'>edit</i></a>
                                <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/inscripcion_cliente/{{$value->id}}'><i class = 'material-icons'>info</i></a>
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
