<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        $this->call(UserTableSeeder::class);
        $this->call(FamilyMembersTableSeeder::class);
        $this->call(PatientTableSeeder::class);
        $this->call(ClinicalInfoTableSeeder::class);
        $this->call(GamesTableSeeder::class);
        $this->call(TrainingProgramTableSeeder::class);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
