@extends('layouts.app')

@section('content')
        <div class = 'container'>
            <div class="page-header">
                <h1>Transportistas <small> - Información de Registro</small></h1>
            </div>
            <br>
            <form method = 'get' action = '../registro_transportistum'>
                <button class = 'btn btn-default'><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>Regresar</button>
            </form>
            <br>
            <table class = 'table table-bordered table-striped table-hover'>
                <thead>
                    <th class="col-md-6 info">Campo</th>
                    <th class="col-md-6 info">Datos del Registro</th>
                </thead>
                <tbody>

                    <tr>
                        <td>
                            <b><i>Nombre: </i></b>
                        </td>
                        <td>{{$registro_transportistum->nombre_transportista}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Apellido: </i></b>
                        </td>
                        <td>{{$registro_transportistum->apellido_transportista}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Sector: </i></b>
                        </td>
                        <td>{{$registro_transportistum->sector_ruta}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Colegio: </i></b>
                        </td>
                        <td>{{$registro_transportistum->colegios_ruta}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Fecha de Registro: </i></b>
                        </td>
                        <td>{{$registro_transportistum->fecha_registro}}</td>
                    </tr>

                    <tr>
                        <td>
                            <b><i>Fecha de Creación: </i></b>
                        </td>
                        <td>{{$registro_transportistum->created_at}}</td>
                    </tr>

                    <tr>
                        <td>
                            <b><i>Fecha de Actualización: </i></b>
                        </td>
                        <td>{{$registro_transportistum->updated_at}}</td>
                    </tr>
                    

                        
                </tbody>
            </table>
        </div>
@endsection
