@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Cartelera Informativa - Bienvenid@
                </div>
                <div class="panel-body">
                    <figure>
                        <img src="{{URL::asset('assets/img/bg.jpg')}}" alt="profile Pic" height="auto" width="100%">
                    </figure>
                    <br>
                    <div class="page-header">
                        <h1>ATEA - <small>Asociación de Transportistas Escolares del Estado Aragua</small></h1>
                    </div>
                    <div class="presentacion">
                      <div class="row">
                        <div class="col-md-2 col-md-offset-1">
                          <img src="{{URL::asset('assets/img/logo.png')}}" alt="Transporte Escolar" height="auto" width="100%">
                        </div>
                        <div class="col-md-7 col-md-offset-1">
                          <p>
                            Somos una organización dedicada a prestar el servicio de traslado de estudiantes ya bien sea de primaria y/o secundaria,  fundada en el año 2006 se encuentra ubicada en el C.C Merbumar locales número 66- 67 Urb. Caña de Azúcar, Maracay Estado Aragua. Con el tiempo el crecimiento de la demanda de transportes escolares se ha incrementado, incrementando nuestro personal y adquiriendo nuevos clientes, hoy en día se encuentra prestando servicio.
                          </p>
                        </div>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="page-header">
                            <h2>¿Quiénes Somos?</h2>
                        </div>
                      </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                                {{--<img data-src="holder.js/100%x242" alt="100%x242" style="height: 242px; width: 100%; display: block;" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMjQyIiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDI0MiAyMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MjAwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTU1NDUyMmY3N2QgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMnB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNTU0NTIyZjc3ZCI+PHJlY3Qgd2lkdGg9IjI0MiIgaGVpZ2h0PSIyMDAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSI4OS44NTkzNzUiIHk9IjEwNS40Ij4yNDJ4MjAwPC90ZXh0PjwvZz48L2c+PC9zdmc+" data-holder-rendered="true">--}}
                                <img src="http://lorempixel.com/500/250/people" />
                                <div class="caption">
                                    <h3 class="text-center">Misión</h3>
                                    <p class="text-center">Proporcionar a todos nuestros clientes un servicio de transporte seguro, oportuno y cómodo, a un precio competitivo y con una auténtica. Mantener a todo nuestro personal calificado y capacitado con gran sentido de responsabilidad con el usuario y la comunidad, respetando y protegiendo la vida humana, y cumpliendo con las normas de transporte y protección del medio ambiente.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                                {{--<img data-src="holder.js/100%x242" alt="100%x242" style="height: 242px; width: 100%; display: block;" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMjQyIiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDI0MiAyMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MjAwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTU1NDUyMmUxMWEgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMnB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNTU0NTIyZTExYSI+PHJlY3Qgd2lkdGg9IjI0MiIgaGVpZ2h0PSIyMDAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSI4OS44NTkzNzUiIHk9IjEwNS40Ij4yNDJ4MjAwPC90ZXh0PjwvZz48L2c+PC9zdmc+" data-holder-rendered="true">--}}
                                <img src="http://lorempixel.com/500/250/city" />
                                <div class="caption">
                                    <h3 class="text-center">Visión</h3>
                                    <p class="text-center">Nuestra visión es consolidarnos como la empresa líder en el transporte escolar gracias a nuestra calidad, prestigio, mejoramiento continuo y respuesta en el servicio en el Estado Aragua.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                                {{--<img data-src="holder.js/100%x242" alt="100%x242" style="height: 242px; width: 100%; display: block;" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMjQyIiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDI0MiAyMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MjAwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTU1NDUyMzMwNGYgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMnB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNTU0NTIzMzA0ZiI+PHJlY3Qgd2lkdGg9IjI0MiIgaGVpZ2h0PSIyMDAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSI4OS44NTkzNzUiIHk9IjEwNS40Ij4yNDJ4MjAwPC90ZXh0PjwvZz48L2c+PC9zdmc+" data-holder-rendered="true">--}}
                                <img src="http://lorempixel.com/500/250/transport" />
                                <div class="caption">
                                    <h3 class="text-center">Compromisos</h3>
                                    <ul>
                                      <li>Mejorar de forma constante y permanente nuestro servicio.</li>
                                      <li>Transmitir confianza y calidez a nuestros clientes.</li>
                                      <li>Fomentar compromiso y responsabilidad de los transportistas, hacia nuestros usuarios y a ellos mismos.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="page-header">
                        <h3>Beneficios en los siguientes sectores:</h3>
                    </div>
                    <div class="section-2">
                      <div class="row">
                        <div class="col-md-3">
                          <h4 class="beneficio-title">Hacia la Sociedad</h4>
                          <ul>
                            <li>Disminuir la contaminación de manera significativa en la Ciudad.</li>
                            <li>Evitar problemas de congestionamiento y tráfico urbano.</li>
                            <li>Incrementar la seguridad en los niños transportados  en Aragua.</li>
                          </ul>
                        </div>
                        <div class="col-md-3">
                          <h4 class="beneficio-title">Hacia la Escuela</h4>
                          <ul>
                            <li>Permite concentrar a todos los estudiantes en el mismo lugar, y hora.</li>
                            <li>Evitar problemas de tráfico y estacionamiento.</li>
                            <li>Lograr el incremento de la población del colegio.</li>
                            <li>Mejorar la relación debido a la disminución de tráfico en la zona.</li>
                            <li>Salidas de emergencia con control de seguridad.</li>
                          </ul>
                        </div>
                        <div class="col-md-3">
                          <h4 class="beneficio-title">Hacia los Padres de Familia</h4>
                          <ul>
                            <li>Tener un ahorro mensual.</li>
                            <li>Incrementar el nivel de seguridad de sus hijos.</li>
                            <li>No tener que hacer varios viajes a diferentes horarios.</li>
                          </ul>
                        </div>
                        <div class="col-md-3">
                          <h4 class="beneficio-title">CAPITAL HUMANO</h4>
                          <p>
                            Nuestros Transportistas son altamente capacitados con cursos de seguridad:
                          </p>
                          <ul>
                            <li>Educación Vial.</li>
                            <li>Manejo Defensivo.</li>
                            <li>Relaciones Humanas.</li>
                            <li>Calidad en el Servicio.</li>
                            <li>Seguridad Vial y de Pasajeros.</li>
                            <li>Primeros Auxilios.</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="clearfix">
                          <hr>
                        </div>
                      </div>
                    </div>
                    <div class="form">
                        <div class="row">
                            <div class="col-md-6">
                                {{--<img data-src="holder.js/100%x100%" alt="100%x100%" style="height: 100%; width: 100%; display: block;" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMjQyIiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDI0MiAyMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MjAwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTU1NDUyMmUxMWEgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMnB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNTU0NTIyZTExYSI+PHJlY3Qgd2lkdGg9IjI0MiIgaGVpZ2h0PSIyMDAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSI4OS44NTkzNzUiIHk9IjEwNS40Ij4yNDJ4MjAwPC90ZXh0PjwvZz48L2c+PC9zdmc+" data-holder-rendered="true">--}}
                                <img src="http://lorempixel.com/500/450/business" />
                            </div>
                            <div class="col-md-6">
                                <form>
                                    <label for="">Contacto</label>
                                    <hr>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nombre</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nombre y Apellido">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="nombre@empresa.com">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Asunto</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Descripción">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Mensaje</label>
                                        <textarea class="form-control" rows="3"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-default">Enviar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
