<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::truncate();

        App\User::create([
        	'name' => 'admin',
        	'email' => 'admin@app.com',
            'password' => Hash::make('12345678'),
        ]);
    }
}
