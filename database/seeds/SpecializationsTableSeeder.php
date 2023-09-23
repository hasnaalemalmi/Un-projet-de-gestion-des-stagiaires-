<?php

use App\Models\Specialization;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpecializationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('specializations')->delete();
        $specializations = [
            ['fr'=> 'développement digital', 'ar'=> 'التنمية الرقمية ' , 'en'=>'digital development'],
            ['en'=> 'Computer Network', 'ar'=> ' الشبكة المعلوماتية' , 'fr'=>'réseau informatique'],
            ['en'=> 'Business Management ', 'ar'=> '  تسيير المقاولات' , 'fr'=>'Gestion entreprise '],
            ['en'=> 'Arabic', 'ar'=> 'عربي' , 'fr'=>'arabic'],
            ['en'=> 'English', 'ar'=> 'انجليزي' ,'fr'=>'anglais' ],
            ['en'=> 'fransh', 'ar'=> 'الفرنسية' ,'fr'=>'fraçais' ],
            
        ];
        foreach ($specializations as $S) {
            Specialization::create(['Name' => $S]);
        }
    }
}
