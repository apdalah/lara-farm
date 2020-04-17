<?php

use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Client::truncate();

        App\Client::create([
        	'name' => 'admin',
        	'mobile' => '01010',
        ]);
    }
}
