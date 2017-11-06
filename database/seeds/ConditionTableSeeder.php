<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ConditionTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
      //
  	DB::table('condition')->insert( [
  		'name' => 'Hot and Dry', 
      'base_temperature' => 90, 
      'percent_chance' => 0.05,
  		'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
  		'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
  	]);
  		
  	DB::table('condition')->insert( [
  		'name' => 'Hot', 
      'base_temperature' => 80, 
      'percent_chance' => 0.10,
  		'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
  		'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
  	]);

  	DB::table('condition')->insert( [
  		'name' => 'Sunny', 
      'base_temperature' => 75, 
      'percent_chance' => 0.5,
  		'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
  		'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
  	]);

  	DB::table('condition')->insert( [
  		'name' => 'Windy', 
      'base_temperature' => 70, 
      'percent_chance' => 0.1,
  		'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
  		'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
  	]);

  	DB::table('condition')->insert( [
  		'name' => 'Cloudy', 
      'base_temperature' => 65, 
      'percent_chance' => 0.1,
  		'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
  		'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
  	]);

  	DB::table('condition')->insert( [
  		'name' => 'Rainy', 
      'base_temperature' => 70, 
      'percent_chance' => 0.1,
  		'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
  		'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
  	]);

  	DB::table('condition')->insert( [	
  		'name' => 'Thunderstorms', 
      'base_temperature' => 70, 
      'percent_chance' => 0.05,
  		'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
  		'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
  	]);
  }
}
