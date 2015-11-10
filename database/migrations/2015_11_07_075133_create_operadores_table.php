<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOperadoresTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('operadores', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id', true, true);
			$table->string('nombre', 255);
			$table->string('apellido', 255);
			$table->string('cuil', 255);
			$table->integer('cel_cod_area', true);
			$table->integer('cel', true);
			$table->string('responsable', 255);
			$table->string('domicilio', 255);
			$table->string('referencia_domicilio', 255);
			$table->integer('tipo_operador_id', true);
			$table->dateTime('created_at');
			$table->dateTime('updated_at');
			$table->string('created_at_ip', 255);
			$table->string('updated_at_ip', 255);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('operadores');
	}

}
