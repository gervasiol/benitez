<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::create('Clientes', function (Blueprint $table) {
    		$table->increments('id');
    		$table->string('nombre',50);
    		$table->string('apellido',50);
    		$table->string('cuil',20);
    		$table->integer('cel_cod_area')->unsigned();
    		$table->integer('cel')->unsigned();
    		$table->string('responsable',50);
    		$table->string('domicilio',100);
    		$table->string('referencia_domicilio',250);
    		$table->timestamps();
    		$table->string('created_at_ip');
    		$table->string('updated_at_ip');
    	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    	Schema::drop('Clientes');
    }
}
