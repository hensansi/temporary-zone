<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMix extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mixes', function($table)
        {
        	$table->integer('id_technology')->unsigned();
			$table->foreign('id_technology')->references('id')->on('technologies');
			$table->integer('id_work')->unsigned();
			$table->foreign('id_work')->references('id')->on('works');
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
		Schema::drop('mixes');
	}

}
