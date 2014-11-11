<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderstable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orders',function($table){
			$table->increments('id');
			$table->integer('orderid');
			$table->string('name');
			$table->string('type');
			$table->string('version');
			$table->string('brand');
			$table->integer('amount');
			$table->integer('price');
			$table->string('buyorsale');
			$table->dateTime('datetime');
			$table->string('responsible');
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
		Schema::drop('orders');
	}

}
