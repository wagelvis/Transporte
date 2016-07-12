@extends('layouts.app')
@section('content')
        <div class = 'container'>
            <div class="page-header">
                <h1>Transportistas <small> - Crear Registro</small></h1>
            </div>
            <form method = 'get' action = '../registro_transportistum'>
                <button class = 'btn btn-default'><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> Regresar</button>
            </form>
            <br>
            <div class="row">
                <form method = 'POST' action = '../registro_transportistum'>
                    <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nombre_transportista">Nombre</label>
                            <input id="nombre_transportista" name = "nombre_transportista" type="text" class="form-control" placeholder="Juan" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="apellido_transportista">Apellido</label>
                            <input id="apellido_transportista" name = "apellido_transportista" type="text" class="form-control" placeholder="Perez" required>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="contrasena_transportista">Contraseña</label>
                            <input id="contrasena_transportista" name = "contrasena_transportista" type="password" class="form-control" placeholder="********" required>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="confirmacion_contrasena">Confirmación Contraseña</label>
                            <input id="confirmacion_contrasena" name = "confirmacion_contrasena" type="password" class="form-control" placeholder="********" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="pregunta_seguridad">Pregunta de Seguridad</label>
                            <input id="pregunta_seguridad" name = "pregunta_seguridad" type="text" class="form-control" placeholder="Mi Mascota" required>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="sector_ruta">Sector de Ruta</label>
                            <!-- <input id="sector_ruta" name = "sector_ruta" type="text" class="form-control"> -->
                            <select id="sector_ruta" name = "sector_ruta" class="form-control">
                              <option selected value="0"> Elige una opción </option>
                              <option value="1">23 de Enero</option>
                              <option value="2">Alayón</option>
                              <option value="3">Andrés Eloy Blanco</option>
                              <option value="4">Arsenal</option>
                              <option value="5">Base Aragua</option>
                              <option value="6">Bermúdez</option>
                              <option value="7">Bolívar</option>
                              <option value="8">Brisas del Lago</option>
                              <option value="9">Calicanto</option>
                              <option value="10">Camburito</option>
                              <option value="11">Campo Alegre</option>
                              <option value="12">Cantarrana</option>
                              <option value="13">Casanova Godoy</option>
                              <option value="14">Casco de La Ciudad</option>
                              <option value="15">Caña de Azúcar</option>
                              <option value="16">Cooperativa Los Olivos Nuevos</option>
                              <option value="17">Cooperativa Los Olivos Viejos</option>
                              <option value="18">Coromoto</option>
                              <option value="19">El Bosque</option>
                              <option value="20">El Carmen</option>
                              <option value="21">El Centro</option>
                              <option value="22">El Limon</option>
                              <option value="23">El Milagro</option>
                              <option value="24">El Recurso</option>
                              <option value="25">El Toro</option>
                              <option value="26">El Trebol</option>
                              <option value="27">El Valle de Santa Rita</option>
                              <option value="28">Francisco de Miranda</option>
                              <option value="29">Fundación Mendoza</option>
                              <option value="30">Girardot</option>
                              <option value="31">José Antonio Páez</option>
                              <option value="32">José Casanova Godoy</option>
                              <option value="33">José Félix Rivas</option>
                              <option value="34">José Gregorio Hernández</option>
                              <option value="35">La Arboleda</option>
                              <option value="36">La Barraca</option>
                              <option value="37">La Candelaria</option>
                              <option value="38">La democracia</option>
                              <option value="39">La Esmeralda</option>
                              <option value="40">La Independencia</option>
                              <option value="41">La Maracaya</option>
                              <option value="42">La Morita</option>
                              <option value="43">La Pedrera</option>
                              <option value="44">La Romana</option>
                              <option value="45">La Soledad</option>
                              <option value="46">Las Acacias</option>
                              <option value="47">Las delicias</option>
                              <option value="48">Las Flores</option>
                              <option value="49">La Coromoto</option>
                              <option value="50">Los Samanes</option>
                              <option value="51">Mata Redonda</option>
                              <option value="52">Piñonal</option>
                              <option value="53">San Vicente</option>
                              <option value="54">San Jacinto</option>
                              <option value="55">San José</option>
                              <option value="56">San Luis</option>
                              <option value="57">San Miguel</option>
                              <option value="58">Santa Rita</option>
                              <option value="59">Santa Rosa</option>
                              <option value="60">Palo Negro</option>
                              <option value="61">Turmeto</option>
                              <option value="62">Cagua</option>
                              <option value="63">Villa de Cura</option>
                              <option value="64">Colonia Tova</option>
                              <option value="65">Tejerías</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="colegios_ruta">Colegios Ruta</label>
                            <input id="colegios_ruta" name = "colegios_ruta" type="text" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="fecha_registro">Fecha de Registro</label>
                            <input id="fecha_registro" name = "fecha_registro" type="date" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <button class = 'btn btn-success btn-lg' type ='submit'><span class="glyphicon glyphicon-floppy-saved" aria-hidden="true"></span> Guardar Registro</button>
                    </div>
                </form>
            </div>
            <br>
        </div>
@endsection
