@extends('layouts.app')
@section('content')
        <div class = 'container'>
            <div class="page-header">
                <h1>Clientes <small> - Información del Pago</small></h1>
            </div>
            <br>
            <form method = 'get' action = '../controlpago_cliente'>
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
                            <b><i>CI. del Representante: </i></b>
                        </td>
                        <td>{{$controlpago_cliente->ci_representante}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Comprobante de Pago: </i></b>
                        </td>
                        <td>{{$controlpago_cliente->comprobante_pago}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Código de Depósito: </i></b>
                        </td>
                        <td>{{$controlpago_cliente->codigo_deposito}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Fecha de Pago: </i></b>
                        </td>
                        <td>{{$controlpago_cliente->fecha_pago}}</td>
                    </tr>

                    <tr>
                        <td>
                            <b><i>Fecha de Creación: </i></b>
                        </td>
                        <td>{{$controlpago_cliente->created_at}}</td>
                    </tr>

                    <tr>
                        <td>
                            <b><i>Fecha de Actualización: </i></b>
                        </td>
                        <td>{{$controlpago_cliente->updated_at}}</td>
                    </tr>

                        
                </tbody>
            </table>
        </div>
        </div>
@endsection
