<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tickets', function(Blueprint $table)
		{
            $table->engine = 'InnoDB';

			$table->increments('id');

			$table->string('title', 200);
			$table->enum('status', ['open', 'closed']);

			$table->unsignedInteger('user_id');
			$table->foreign('user_id')->references('id')->on('users');

			$table->nullableTimestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tickets');
	}

}
