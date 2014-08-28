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
            #Change the if and put a weak table
            $table->increments('id');
            $table->integer('id_work')->unsigned();
			$table->foreign('id_work')->references('id')->on('works');
            $table->integer('id_technology')->unsigned();
            $table->foreign('id_technology')->references('id')->on('technologies');
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
