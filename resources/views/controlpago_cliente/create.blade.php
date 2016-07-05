@extends('layouts.app')
@section('content')
        <div class = 'container'>
            <div class="page-header">
                <h1>Clientes <small> - Registrar Pago</small></h1>
            </div>
            <form method = 'get' action = '../controlpago_cliente'>
                <button class = 'btn btn-default'><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> Regresar</button>
            </form>
            <br>
            <div class="row">
                <form method = 'POST' action = '../controlpago_cliente'>
                    <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="ci_representante">CI. del Representante</label>
                            <input id="ci_representante" name = "ci_representante" type="text" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="comprobante_pago">Comprobante de Pago</label>
                            <input id="comprobante_pago" name = "comprobante_pago" type="text" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="codigo_deposito">Código de Depósito</label>
                            <input id="codigo_deposito" name = "codigo_deposito" type="text" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="fecha_pago">Fecha de Pago</label>
                            <input id="fecha_pago" name = "fecha_pago" type="date" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <button class = 'btn btn-success btn-lg' type ='submit'><span class="glyphicon glyphicon-floppy-saved" aria-hidden="true"></span> Guardar Registro</button>
                    </div>
                </form>
            </div>
        </div>
@endsection
