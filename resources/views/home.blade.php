@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Cartelera</div>

                <div class="panel-body">
                    Estás dentro de la Aplicación!
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Transportistas
                </div>
                <div class="panel-body">
                    <a class="btn btn-info btn-block pull-right" href="{{ url('/registro_transportistum') }}">Registro <span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span></a>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Transportistas
                </div>
                <div class="panel-body">
                    <a class="btn btn-info btn-block pull-right" href="{{ url('/mensualidades_transportista') }}">Mensualidades <span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span></a>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Transportistas
                </div>
                <div class="panel-body">
                    <a class="btn btn-info btn-block pull-right" href="{{ url('/cotizaciones_transportista') }}">Cotizaciones <span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span></a>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Clientes
                </div>
                <div class="panel-body">
                    <a class="btn btn-info btn-block pull-right" href="{{ url('/registro_cliente') }}">Registro <span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span></a>
                </div>
            </div>
        </div>

        <div class="col-md-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Clientes
                </div>
                <div class="panel-body">
                    <a class="btn btn-info btn-block pull-right" href="{{ url('/inscripcion_cliente') }}">Inscripción <span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span></a>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Clientes
                </div>
                <div class="panel-body">
                    <a class="btn btn-info btn-block pull-right" href="{{ url('/controlpago_cliente') }}">Pagos <span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span></a>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Mapa
                </div>
                <div class="panel-body">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62814.8883312998!2d-67.6404299090928!3d10.267182073028676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e803c989377fe87%3A0xb5ff524dadae5b74!2sMaracay%2C+Aragua!5e0!3m2!1ses-419!2sve!4v1467722842364" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
