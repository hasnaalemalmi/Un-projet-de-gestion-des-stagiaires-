<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(GradeSeeder::class);
        $this->call(ClassroomTableSeeder::class);
        $this->call(SectionsTableSeeder::class);
      

    
        $this->call(SpecializationsTableSeeder::class);
        $this->call(GenderTableSeeder::class);
  
        $this->call(StudentsTableSeeder::class);
        $this->call(TeachersSeed::class);
        $this->call(SettingsTableSeeder::class);
    }
}
