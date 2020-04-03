<?php

use Illuminate\Database\Seeder;

class PlantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Plant::truncate();
        
        App\Plant::create([
        	'name' => 'tomato',
        	'category_id' => 1,
        ]);

        App\Plant::create([
            'name' => 'Potato',
            'category_id' => 1,
        ]);

        App\Plant::create([
            'name' => 'Carrots',
            'category_id' => 2,
        ]);

        App\Plant::create([
            'name' => 'Vegetables',
            'category_id' => 3,
        ]);
    }
}
