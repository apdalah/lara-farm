<?php

use Illuminate\Database\Seeder;

class WateringTableSeeder extends Seeder
{
    /**
     * Run the database Waterings.
     *
     * @return void
     */
    public function run()
    {
        App\Watering::truncate();
        
        App\Watering::create([
        	'category_id' => '1',
        	'fertilizer_type' => 'z-power',
        	'water_amount' => 200,
        	'fertilizer_amount' => 2.0,
        	'is_first' => 0,
        	'shifting' => 0
        ]);

        App\Watering::create([
        	'category_id' => '1',
        	'fertilizer_type' => 'z-power',
        	'water_amount' => 100,
        	'fertilizer_amount' => 1.0,
        	'is_first' => 0,
        	'shifting' => 7
        ]);
        App\Watering::create([
        	'category_id' => '1',
        	'fertilizer_type' => 'z-power',
        	'water_amount' => 100,
        	'is_first' => 0,
        	'fertilizer_amount' => 1.0,
        	'shifting' => 14
        ]);

        App\Watering::create([
        	'category_id' => '1',
        	'fertilizer_type' => 'z-power',
        	'fertilizer_amount' => 0.5,
        	'is_first' => 0,
        	'water_amount' => 100,
        	'shifting' => 21
        ]);

        App\Watering::create([
        	'category_id' => '1',
        	'fertilizer_type' => 'z-power',
        	'fertilizer_amount' => 0.5,
        	'is_first' => 0,
        	'water_amount' => 100,
        	'shifting' => 28
        ]);

        App\Watering::create([
        	'category_id' => '1',
        	'fertilizer_type' => 'z-power',
        	'is_first' => 0,
        	'fertilizer_amount' => 0.2,
        	'water_amount' => 100,
        	'shifting' => 35
        ]);

        App\Watering::create([
        	'category_id' => '1',
        	'fertilizer_type' => 'z-power',
        	'is_first' => 0,
        	'fertilizer_amount' => 0.2,
        	'water_amount' => 100,
        	'shifting' => 42
        ]);

        App\Watering::create([
        	'category_id' => '1',
        	'fertilizer_type' => 'z-power',
        	'is_first' => 0,
        	'fertilizer_amount' => 0.2,
        	'water_amount' => 100,
        	'shifting' => 49
        ]);

        App\Watering::create([
        	'category_id' => '1',
        	'fertilizer_type' => 'z-power',
        	'is_first' => 0,
        	'fertilizer_amount' => 0.2,
        	'water_amount' => 100,
        	'shifting' => 56
        ]);

        App\Watering::create([
        	'category_id' => '1',
        	'is_first' => 0,
        	'fertilizer_type' => 'z-power',
        	'fertilizer_amount' => 0.2,
        	'water_amount' => 100,
        	'shifting' => 63
        ]);

        App\Watering::create([
        	'category_id' => '1',
        	'fertilizer_type' => 'z-power',
        	'is_first' => 0,
        	'fertilizer_amount' => 0.2,
        	'water_amount' => 100,
        	'shifting' => 70
        ]);

        // B-POWER

        App\Watering::create([
        	'category_id' => '1',
        	'fertilizer_type' => 'b-power',
        	'is_first' => 0,
        	'fertilizer_amount' => 15.0,
        	'water_amount' => 200,
        	'shifting' => 3
        ]);

        App\Watering::create([
        	'category_id' => '1',
        	'fertilizer_type' => 'b-power',
        	'is_first' => 0,
        	'fertilizer_amount' => 0.5,
        	'water_amount' => 100,
        	'shifting' => 10
        ]);

        App\Watering::create([
        	'category_id' => '1',
        	'fertilizer_type' => 'b-power',
        	'is_first' => 0,
        	'fertilizer_amount' => 0.5,
        	'water_amount' => 100,
        	'shifting' => 17
        ]);

        App\Watering::create([
        	'category_id' => '1',
        	'is_first' => 0,
        	'fertilizer_type' => 'b-power',
        	'fertilizer_amount' => 0.5,
        	'water_amount' => 100,
        	'shifting' => 24
        ]);

        App\Watering::create([
        	'category_id' => '1',
        	'is_first' => 0,
        	'fertilizer_type' => 'b-power',
        	'fertilizer_amount' => 0.5,
        	'water_amount' => 100,
        	'shifting' => 31
        ]);

        App\Watering::create([
        	'category_id' => '1',
        	'is_first' => 0,
        	'fertilizer_type' => 'b-power',
        	'fertilizer_amount' => 0.2,
        	'water_amount' => 100,
        	'shifting' => 38
        ]);

        App\Watering::create([
        	'category_id' => '1',
        	'fertilizer_type' => 'b-power',
        	'is_first' => 0,
        	'fertilizer_amount' => 0.2,
        	'water_amount' => 100,
        	'shifting' => 45
        ]);

        App\Watering::create([
        	'category_id' => '1',
        	'is_first' => 0,
        	'fertilizer_type' => 'b-power',
        	'fertilizer_amount' => 0.2,
        	'water_amount' => 100,
        	'shifting' => 52
        ]);

        App\Watering::create([
        	'category_id' => '1',
        	'is_first' => 0,
        	'fertilizer_type' => 'b-power',
        	'fertilizer_amount' => 0.2,
        	'water_amount' => 100,
        	'shifting' => 59
        ]);

        App\Watering::create([
        	'category_id' => '1',
        	'fertilizer_type' => 'b-power',
        	'is_first' => 0,
        	'fertilizer_amount' => 0.2,
        	'water_amount' => 100,
        	'shifting' => 66
        ]);

        // watering when is_first = 1

        App\Watering::create([
            'category_id' => '1',
            'fertilizer_type' => 'z-power',
            'is_first' => 1,
            'fertilizer_amount' => 2.0,
            'water_amount' => 200,
            'shifting' => 0
        ]);

        App\Watering::create([
            'category_id' => '1',
            'fertilizer_type' => 'z-power',
            'is_first' => 1,
            'fertilizer_amount' => 1.0,
            'water_amount' => 100,
            'shifting' => 7
        ]);

        App\Watering::create([
            'category_id' => '1',
            'fertilizer_type' => 'z-power',
            'is_first' => 1,
            'fertilizer_amount' => 1.0,
            'water_amount' => 100,
            'shifting' => 14
        ]);

        App\Watering::create([
            'category_id' => '1',
            'fertilizer_type' => 'z-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.5,
            'water_amount' => 100,
            'shifting' => 21
        ]);

        App\Watering::create([
            'category_id' => '1',
            'fertilizer_type' => 'z-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.5,
            'water_amount' => 100,
            'shifting' => 28
        ]);

        App\Watering::create([
            'category_id' => '1',
            'fertilizer_type' => 'z-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 35
        ]);

        App\Watering::create([
            'category_id' => '1',
            'fertilizer_type' => 'z-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 42
        ]);

        App\Watering::create([
            'category_id' => '1',
            'fertilizer_type' => 'z-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 49
        ]);

        App\Watering::create([
            'category_id' => '1',
            'fertilizer_type' => 'z-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 56
        ]);

        App\Watering::create([
            'category_id' => '1',
            'fertilizer_type' => 'z-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 63
        ]);

        App\Watering::create([
            'category_id' => '1',
            'fertilizer_type' => 'z-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 70
        ]);


        // b-bower when is_first = 1


        App\Watering::create([
            'category_id' => '1',
            'fertilizer_type' => 'b-power',
            'is_first' => 1,
            'fertilizer_amount' => 1.0,
            'water_amount' => 100,
            'shifting' => 3
        ]);

        App\Watering::create([
            'category_id' => '1',
            'fertilizer_type' => 'b-power',
            'is_first' => 1,
            'fertilizer_amount' => 1.0,
            'water_amount' => 100,
            'shifting' => 10
        ]);

        App\Watering::create([
            'category_id' => '1',
            'fertilizer_type' => 'b-power',
            'is_first' => 1,
            'fertilizer_amount' => 1.0,
            'water_amount' => 100,
            'shifting' => 17
        ]);

        App\Watering::create([
            'category_id' => '1',
            'fertilizer_type' => 'b-power',
            'is_first' => 1,
            'fertilizer_amount' => 1.0,
            'water_amount' => 100,
            'shifting' => 24
        ]);

        App\Watering::create([
            'category_id' => '1',
            'fertilizer_type' => 'b-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.5,
            'water_amount' => 100,
            'shifting' => 31
        ]);

        App\Watering::create([
            'category_id' => '1',
            'fertilizer_type' => 'b-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.5,
            'water_amount' => 100,
            'shifting' => 38
        ]);

        App\Watering::create([
            'category_id' => '1',
            'fertilizer_type' => 'b-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 45
        ]);

        App\Watering::create([
            'category_id' => '1',
            'fertilizer_type' => 'b-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 52
        ]);

        App\Watering::create([
            'category_id' => '1',
            'fertilizer_type' => 'b-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 59
        ]);

        App\Watering::create([
            'category_id' => '1',
            'fertilizer_type' => 'b-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 66
        ]);

        //Cat 2 is_first 0 / Z-bower

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'z-power',
            'is_first' => 0,
            'fertilizer_amount' => 2.0,
            'water_amount' => 200,
            'shifting' => -7
        ]);

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'z-power',
            'is_first' => 0,
            'fertilizer_amount' => 1.0,
            'water_amount' => 100,
            'shifting' => 0
        ]);

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'z-power',
            'is_first' => 0,
            'fertilizer_amount' => 1.0,
            'water_amount' => 100,
            'shifting' => 7
        ]);

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'z-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 14
        ]);

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'z-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 21
        ]);

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'z-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 28
        ]);

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'z-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 35
        ]);

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'z-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 42
        ]);

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'z-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 49
        ]);

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'z-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 56
        ]);

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'z-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 63
        ]);

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'z-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 70
        ]);

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'z-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 77
        ]);

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'z-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 84
        ]);

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'z-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 91
        ]);

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'z-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 98
        ]);

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'z-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 105
        ]);

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'z-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 112
        ]);

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'z-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 119
        ]);

        //Cat 2 is_first 0 / b-bower

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'b-power',
            'is_first' => 0,
            'fertilizer_amount' => 15.0,
            'water_amount' => 200,
            'shifting' => -4
        ]);

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'b-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.5,
            'water_amount' => 100,
            'shifting' => 3
        ]);

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'b-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.5,
            'water_amount' => 100,
            'shifting' => 10
        ]);

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'b-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.5,
            'water_amount' => 100,
            'shifting' => 17
        ]);

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'b-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.5,
            'water_amount' => 100,
            'shifting' => 24
        ]);

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'b-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 31
        ]);

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'b-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 38
        ]);

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'b-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 45
        ]);

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'b-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 52
        ]);

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'b-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 59
        ]);

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'b-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 66
        ]);
        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'b-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 73
        ]);

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'b-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 80
        ]);

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'b-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 87
        ]);

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'b-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 94
        ]);

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'b-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 101
        ]);

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'b-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 108
        ]);

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'b-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 115
        ]);

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'b-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 122
        ]);

        //Cat 2 is_first 1 / Z-bower

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'z-power',
            'is_first' => 1,
            'fertilizer_amount' => 2.0,
            'water_amount' => 200,
            'shifting' => -7
        ]);

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'z-power',
            'is_first' => 1,
            'fertilizer_amount' => 1.0,
            'water_amount' => 100,
            'shifting' => 0
        ]);

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'z-power',
            'is_first' => 1,
            'fertilizer_amount' => 1.0,
            'water_amount' => 100,
            'shifting' => 7
        ]);

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'z-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 14
        ]);

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'z-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 21
        ]);

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'z-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 28
        ]);

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'z-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 35
        ]);

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'z-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 42
        ]);

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'z-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 49
        ]);

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'z-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 56
        ]);

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'z-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 63
        ]);

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'z-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 70
        ]);

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'z-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 77
        ]);

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'z-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 84
        ]);

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'z-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 91
        ]);

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'z-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 98
        ]);

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'z-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 105
        ]);

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'z-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 112
        ]);

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'z-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 119
        ]);

        //Cat 2 is_first 1 / B-bower

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'b-power',
            'is_first' => 1,
            'fertilizer_amount' => 1.0,
            'water_amount' => 100,
            'shifting' => -4
        ]);

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'b-power',
            'is_first' => 1,
            'fertilizer_amount' => 1.0,
            'water_amount' => 100,
            'shifting' => 3
        ]);

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'b-power',
            'is_first' => 1,
            'fertilizer_amount' => 1.0,
            'water_amount' => 100,
            'shifting' => 10
        ]);

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'b-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.5,
            'water_amount' => 100,
            'shifting' => 17
        ]);

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'b-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.5,
            'water_amount' => 100,
            'shifting' => 24
        ]);

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'b-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 31
        ]);

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'b-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 38
        ]);

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'b-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 45
        ]);

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'b-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 52
        ]);

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'b-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 59
        ]);

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'b-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 66
        ]);
        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'b-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 73
        ]);

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'b-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 80
        ]);

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'b-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 87
        ]);

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'b-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 94
        ]);

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'b-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 101
        ]);

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'b-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 108
        ]);

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'b-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 115
        ]);

        App\Watering::create([
            'category_id' => '2',
            'fertilizer_type' => 'b-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 122
        ]);





        /////////////////////////////////////////////////////////////

        //Cat 3 is_first 0 / Z-bower

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'z-power',
            'is_first' => 0,
            'fertilizer_amount' => 2.0,
            'water_amount' => 200,
            'shifting' => -7
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'z-power',
            'is_first' => 0,
            'fertilizer_amount' => 1.0,
            'water_amount' => 100,
            'shifting' => 0
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'z-power',
            'is_first' => 0,
            'fertilizer_amount' => 1.0,
            'water_amount' => 100,
            'shifting' => 7
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'z-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 14
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'z-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 21
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'z-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 28
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'z-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 35
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'z-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 42
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'z-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 49
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'z-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 56
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'z-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 63
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'z-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 70
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'z-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 77
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'z-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 84
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'z-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 91
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'z-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 98
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'z-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 105
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'z-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 112
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'z-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 119
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'z-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 126
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'z-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 133
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'z-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 140
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'z-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 147
        ]);

        //Cat 3 is_first 0 / b-bower

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'b-power',
            'is_first' => 0,
            'fertilizer_amount' => 15.0,
            'water_amount' => 200,
            'shifting' => -4
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'b-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.5,
            'water_amount' => 100,
            'shifting' => 3
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'b-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.5,
            'water_amount' => 100,
            'shifting' => 10
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'b-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.5,
            'water_amount' => 100,
            'shifting' => 17
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'b-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.5,
            'water_amount' => 100,
            'shifting' => 24
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'b-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 31
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'b-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 38
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'b-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 45
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'b-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 52
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'b-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 59
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'b-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 66
        ]);
        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'b-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 73
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'b-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 80
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'b-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 87
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'b-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 94
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'b-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 101
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'b-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 108
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'b-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 115
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'b-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 122
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'b-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 129
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'b-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 136
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'b-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 143
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'b-power',
            'is_first' => 0,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 150
        ]);

        //Cat 3 is_first 1 / Z-bower

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'z-power',
            'is_first' => 1,
            'fertilizer_amount' => 2.0,
            'water_amount' => 200,
            'shifting' => -7
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'z-power',
            'is_first' => 1,
            'fertilizer_amount' => 1.0,
            'water_amount' => 100,
            'shifting' => 0
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'z-power',
            'is_first' => 1,
            'fertilizer_amount' => 1.0,
            'water_amount' => 100,
            'shifting' => 7
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'z-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 14
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'z-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 21
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'z-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 28
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'z-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 35
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'z-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 42
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'z-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 49
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'z-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 56
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'z-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 63
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'z-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 70
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'z-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 77
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'z-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 84
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'z-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 91
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'z-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 98
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'z-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 105
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'z-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 112
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'z-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 119
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'z-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 126
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'z-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 133
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'z-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 140
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'z-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 147
        ]);

        //Cat 2 is_first 1 / B-bower

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'b-power',
            'is_first' => 1,
            'fertilizer_amount' => 1.0,
            'water_amount' => 100,
            'shifting' => -4
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'b-power',
            'is_first' => 1,
            'fertilizer_amount' => 1.0,
            'water_amount' => 100,
            'shifting' => 3
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'b-power',
            'is_first' => 1,
            'fertilizer_amount' => 1.0,
            'water_amount' => 100,
            'shifting' => 10
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'b-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.5,
            'water_amount' => 100,
            'shifting' => 17
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'b-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.5,
            'water_amount' => 100,
            'shifting' => 24
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'b-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 31
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'b-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 38
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'b-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 45
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'b-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 52
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'b-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 59
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'b-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 66
        ]);
        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'b-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 73
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'b-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 80
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'b-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 87
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'b-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 94
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'b-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 101
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'b-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 108
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'b-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 115
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'b-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 122
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'b-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 129
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'b-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 136
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'b-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 143
        ]);

        App\Watering::create([
            'category_id' => '3',
            'fertilizer_type' => 'b-power',
            'is_first' => 1,
            'fertilizer_amount' => 0.2,
            'water_amount' => 100,
            'shifting' => 150
        ]);

    }
}
