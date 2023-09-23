<?php

use App\Models\Grade;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grades')->delete();
        $grades = [
            ['en'=> 'BUSINESS MANAGEMENT', 'ar'=> ' تسيير المقاولات' ,'fr'=>'Gestion des entreprises'],
            ['en'=> 'digital devlopememt ', 'ar'=> ' التنمية الرقمية', 'fr'=>'Developpement digital'],
            ['en'=> 'civil engineering ', 'ar'=> 'الهندسة المدنية ','fr'=>'ginie civil'],
        ];

        foreach ($grades as $grade) {
            Grade::create(['Name' => $grade]);
        }

    }
}
