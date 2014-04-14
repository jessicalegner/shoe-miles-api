<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShoesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('shoes', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id');
			$table->string('brand');
			$table->string('style');
			$table->date('purchase_date');
			$table->decimal('miles')->default(0);
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
		Schema::drop('shoes');
	}

}
