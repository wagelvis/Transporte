<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Controlpago_clientes
 *
 * @author  The scaffold-interface created at 2016-06-25 02:05:41pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class ControlpagoClientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('controlpago_clientes',function (Blueprint $table){
        $table->increments('id');
        $table->String('ci_representante');
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
        Schema::drop('controlpago_clientes');
    }
}
