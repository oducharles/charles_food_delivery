<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use FakerRestaurant\Provider\en_US\Restaurant;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //factory('App\User',60)->create();
        // $this->call(UsersTableSeeder::class);
        /*$faker = Faker::create();
        foreach (range(1,5) as $index) {
        	$my_category = DB::table('ordercategorgies')->insert([
	        	'order_type' => $faker->randomElement(['local food' ,'take away']),
	        	'food_photo' => $faker->imageUrl($width = 100, $height = 100),
	        ]);
        }*/
        // dd($my_food);
        
    }
}
