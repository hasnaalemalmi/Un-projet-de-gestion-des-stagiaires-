<?php

use App\Models\Classroom;
use App\Models\Grade;
use App\Models\Section;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sections')->delete();

        $Sections = [
            ['en'=> 'Dev101 ', 'ar'=> 'Dev101'],
            ['en'=> ' DevowFS', 'ar'=> 'DevowFS '],
   
            
        ];

        foreach ($Sections as $section) {
            Section::create([
                'Name_Section' => $section,
                'Grade_id' => Grade::all()->unique()->random()->id,
                'Class_id' => ClassRoom::all()->unique()->random()->id
            ]);
        }
    }
}
