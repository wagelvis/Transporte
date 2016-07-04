<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Registro_clientes
 *
 * @author  The scaffold-interface created at 2016-06-25 03:49:21pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class RegistroClientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('registro_clientes',function (Blueprint $table){
        $table->increments('id');
        $table->String('nombre_usuario');
        $table->String('email_usuario');
        $table->integer('telefono_usuario');
        $table->String('contrasena');
        $table->String('confirmacion_contrasena');
        $table->String('pregunta_seguridad_usuario');
        $table->date('fecha_registro');
        $table->String('id_usuario');
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
        Schema::drop('registro_clientes');
    }
}
