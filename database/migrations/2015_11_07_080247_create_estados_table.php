<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstadosTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('estados', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id', true, true);
			$table->string('descripcion', 255);
			$table->smallInteger('dias_validez');
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
		Schema::drop('estados');
	}

}
