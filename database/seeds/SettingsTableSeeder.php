<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('settings')->delete();

        $data = [
            ['key' => 'current_session', 'value' => '2022-2023'],
            ['key' => 'school_title', 'value' => 'OFPPT'],
            ['key' => 'school_name', 'value' => '   Office de la formation Professionnelle de la Promotion du Travail'],
            ['key' => 'phone', 'value' => '+212 44 33 66 55'],
            ['key' => 'address', 'value' => 'Oued zem '],
            ['key' => 'school_email', 'value' => 'OFPPT@gamil.com'],

        ];

        DB::table('settings')->insert($data);
    }
}
