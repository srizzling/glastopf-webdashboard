<?php
 
class AttackTableSeeder extends Seeder {
 
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{ 
		DB::table('attacks')->insert([
			'hp_label'   => 'toron',
			'attacker_source'      => '127.0.0.1',
			'attacker_port'   => '51871',
			'attacker_pattern' => 'rfi',
			'http_request'  => 'GET /favicon.ico',
			'attack_event_time' => '2014-08-30 00:50:13'
		]);
	} 
}