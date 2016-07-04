@extends('layouts.app')
@section('content')
        <div class = 'container'>
            <div class="page-header">
                <h1>Transportistas <small> - Editar Mensualidad</small></h1>
            </div>
            <form method = 'get' action = '../../mensualidades_transportista'>
                <button class = 'btn btn-default'><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>Regresar</button>
            </form>
            <br>
            <div class="row">
                <form method = 'POST' action = '../../mensualidades_transportista/{{$mensualidades_transportista->id}}/update'>
                    <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="id_transportista">id</label>
                            <input id="id_transportista" name = "id_transportista" type="text" class="form-control" value="{{$mensualidades_transportista->id_transportista}}">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="comprobante_pago">Comprobante de Pago</label>
                            <input id="comprobante_pago" name = "comprobante_pago" type="text" class="form-control" value="{{$mensualidades_transportista->comprobante_pago}}">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="codigo_deposito">Código de Depósito</label>
                            <input id="codigo_deposito" name = "codigo_deposito" type="text" class="form-control" value="{{$mensualidades_transportista->codigo_deposito}}">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="fecha_pago">Fecha de Pago</label>
                            <input id="fecha_pago" name = "fecha_pago" type="text" class="form-control" value="{{$mensualidades_transportista->fecha_pago}}">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <button class = 'btn btn-success btn-lg' type ='submit'><span class="glyphicon glyphicon-floppy-saved" aria-hidden="true"></span> Guardar Registro</button>
                    </div>
                </form>
            </div>
        </div>
@endsection