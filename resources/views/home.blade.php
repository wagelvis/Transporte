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
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Registro Transportistas
                </div>
                <div class="panel-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur dolores harum ipsam, nemo perspiciatis voluptatum? Aut commodi debitis dolores doloribus, eos eveniet excepturi facilis fugiat porro qui rem repellendus repudiandae!</p>
                    <hr>
                    <a class="btn btn-info btn-block pull-right" href="{{ url('/registro_transportistum') }}">Entrar <span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span></a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Mensualidades Transportistas
                </div>
                <div class="panel-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur dolores harum ipsam, nemo perspiciatis voluptatum? Aut commodi debitis dolores doloribus, eos eveniet excepturi facilis fugiat porro qui rem repellendus repudiandae!</p>
                    <hr>
                    <a class="btn btn-info btn-block pull-right" href="{{ url('/mensualidades_transportista') }}">Entrar <span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span></a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Cotizaciones Transportistas
                </div>
                <div class="panel-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur dolores harum ipsam, nemo perspiciatis voluptatum? Aut commodi debitis dolores doloribus, eos eveniet excepturi facilis fugiat porro qui rem repellendus repudiandae!</p>
                    <hr>
                    <a class="btn btn-info btn-block pull-right" href="{{ url('/cotizaciones_transportista') }}">Entrar <span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span></a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Registro clientes
                </div>
                <div class="panel-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur dolores harum ipsam, nemo perspiciatis voluptatum? Aut commodi debitis dolores doloribus, eos eveniet excepturi facilis fugiat porro qui rem repellendus repudiandae!</p>
                    <hr>
                    <a class="btn btn-info btn-block pull-right" href="{{ url('/registro_cliente') }}">Entrar <span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span></a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Inscripción Clientes
                </div>
                <div class="panel-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur dolores harum ipsam, nemo perspiciatis voluptatum? Aut commodi debitis dolores doloribus, eos eveniet excepturi facilis fugiat porro qui rem repellendus repudiandae!</p>
                    <hr>
                    <a class="btn btn-info btn-block pull-right" href="{{ url('/inscripcion_cliente') }}">Entrar <span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span></a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Control de Pago Clientes
                </div>
                <div class="panel-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur dolores harum ipsam, nemo perspiciatis voluptatum? Aut commodi debitis dolores doloribus, eos eveniet excepturi facilis fugiat porro qui rem repellendus repudiandae!</p>
                    <hr>
                    <a class="btn btn-info btn-block pull-right" href="{{ url('/controlpago_cliente') }}">Entrar <span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
