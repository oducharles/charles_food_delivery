<?php

use Illuminate\Database\Seeder;

class FoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('foods')->insert([
            'food_name' => string(),
            'price' => str_random(10).'@gmail.com',
            'category' => enum() bcrypt('secret'),
        ]);
    }
}
