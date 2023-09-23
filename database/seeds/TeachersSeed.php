<?php

use Illuminate\Database\Seeder;
use App\Models\Teacher;
class TeachersSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->delete();
        $teachers = new Teacher();
        $teachers->Name = ['ar' => '  عادل طلاب', 'en' => ' adil talab'];
        $teachers->email = 'adil@gmail.com';
        $teachers->password = Hash::make('12345678');
        $teachers->gender_id = 1;
        $teachers->Specialization_id = 3;
        $teachers->Joining_Date = date('2002-01-01');
        $teachers->Address = 'fes maroc ';
 
        $teachers->save();
    }
}
