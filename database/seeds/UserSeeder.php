<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'nabil  ',
            'email' => 'nabil.responsable@gmail.com',
            'password' => Hash::make('QWERTY'),
        ]);
    }
}
