<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColaboradoresTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('colaboradores', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id', true);
			$table->string('nombre', 255);
			$table->string('apellido', 255);
			$table->string('cuil', 255);
			$table->integer('cel_cod_area', true);
			$table->integer('cel', true);
			$table->string('domicilio', 255);
			$table->dateTime('created_at');
			$table->dateTime('updated_at');
			$table->string('created_at_ip', 255);
			$table->string('updated_at_ip', 255);
			$table->date('fecha_ingreso');
			$table->date('fecha_egreso');
			$table->boolean('estado_civil');
			$table->smallInteger('hijos');
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
		Schema::drop('colaboradores');
	}

}
