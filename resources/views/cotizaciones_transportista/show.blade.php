@extends('layouts.app')
@section('content')
        <div class = 'container'>
            <div class="page-header">
                <h1>Cotizaciones <small> - Información de Registro</small></h1>
            </div>
            <br>
            <form method = 'get' action = '../cotizaciones_transportista'>
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
                        <td>{{$cotizaciones_transportista->id_transportista}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Comprobante de Pago: </i></b>
                        </td>
                        <td>{{$cotizaciones_transportista->comprobante_pago}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Código de Depósito: </i></b>
                        </td>
                        <td>{{$cotizaciones_transportista->codigo_deposito}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Fecha de Pago: </i></b>
                        </td>
                        <td>{{$cotizaciones_transportista->fecha_pago}}</td>
                    </tr>

                    <tr>
                        <td>
                            <b><i>Fecha de Creación: </i></b>
                        </td>
                        <td>{{$cotizaciones_transportista->created_at}}</td>
                    </tr>

                    <tr>
                        <td>
                            <b><i>Fecha de Actualización: </i></b>
                        </td>
                        <td>{{$cotizaciones_transportista->updated_at}}</td>
                    </tr>
                        
                </tbody>
            </table>
        </div>
@endsection
