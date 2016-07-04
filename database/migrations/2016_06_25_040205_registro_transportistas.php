<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Registro_transportistas
 *
 * @author  The scaffold-interface created at 2016-06-25 04:02:05pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class RegistroTransportistas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('registro_transportistas',function (Blueprint $table){
        $table->increments('id');
        $table->String('nombre_transportista');
        $table->String('apellido_transportista');
        $table->String('contrasena_transportista');
        $table->String('confirmacion_contrasena');
        $table->String('pregunta_seguridad');
        $table->String('sector_ruta');
        $table->String('colegios_ruta');
        $table->date('fecha_registro');
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
        Schema::drop('registro_transportistas');
    }
}
