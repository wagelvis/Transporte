<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Mensualidades_transportistas
 *
 * @author  The scaffold-interface created at 2016-06-25 03:41:58pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class MensualidadesTransportistas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('mensualidades_transportistas',function (Blueprint $table){
        $table->increments('id');
        $table->String('id_transportista');
        $table->String('comprobante_pago');
        $table->integer('codigo_deposito');
        $table->date('fecha_pago');
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
        Schema::drop('mensualidades_transportistas');
    }
}
