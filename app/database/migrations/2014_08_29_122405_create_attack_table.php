<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttackTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('attacks', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('hp_label'); // Refers to the label of the honeypot (can be linked from host)
			$table->string('attacker_source');
			$table->string('attacker_port');
			$table->string('attacker_pattern');
			$table->string('http_request');
			$table->dateTime('attack_event_time');
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
		Schema::drop('attacks');
	}

}
