@extends('layouts.app')
@section('content')
        <div class = 'container'>
            <div class="page-header">
                <h1>Cliente <small> - Información de Registro</small></h1>
            </div>
            <br>
            <form method = 'get' action = '../registro_cliente'>
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
                        <td>{{$registro_cliente->id_usuario}}</td>
                    </tr>

                    <tr>
                        <td>
                            <b><i>Nombre del Usuario: </i></b>
                        </td>
                        <td>{{$registro_cliente->nombre_usuario}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Correo Electrónico: </i></b>
                        </td>
                        <td>{{$registro_cliente->email_usuario}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Teléfono: </i></b>
                        </td>
                        <td>{{$registro_cliente->telefono_usuario}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Fecha de Registro: </i></b>
                        </td>
                        <td>{{$registro_cliente->fecha_registro}}</td>
                    </tr>

                    <tr>
                        <td>
                            <b><i>Fecha de Creación: </i></b>
                        </td>
                        <td>{{$registro_cliente->created_at}}</td>
                    </tr>

                    <tr>
                        <td>
                            <b><i>Fecha de Actualización: </i></b>
                        </td>
                        <td>{{$registro_cliente->updated_at}}</td>
                    </tr>

                </tbody>
            </table>
        </div>
@endsection
