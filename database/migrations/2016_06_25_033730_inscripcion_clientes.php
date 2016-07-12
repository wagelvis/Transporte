<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Inscripcion_clientes
 *
 * @author  The scaffold-interface created at 2016-06-25 03:37:30pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class InscripcionClientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('inscripcion_clientes',function (Blueprint $table){
        $table->increments('id');
        $table->String('nombre_estudiante');
        $table->String('apellido_estudiante');
        $table->String('sector_ruta');
        $table->String('calle_ruta');
        $table->String('casa_ruta');
        $table->String('colegio_estudiante');
        $table->String('grado_estudiante');
        $table->String('seccion_estudiante');
        $table->String('turno_estudiante');
        $table->integer('telefono_estudiante');
        $table->String('nombre_representante');
        $table->String('apellido_representante');
        $table->String('ci_representante');
        $table->String('id_usuario');
        $table->integer('telefono_representante');
        $table->date('fecha_inscripcion');
        $table->String('contrato_inscripcion');
        $table->timestamps();

        /**
         * Foreignkeys section
         */

        // type your addition here

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('inscripcion_clientes');
    }
}
