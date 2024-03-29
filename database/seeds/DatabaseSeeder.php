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
        $this->call(BloodTableSeeder::class);
        $this->call(NationalitiesTableSeeder::class);
        $this->call(SpecializationsSeeder::class);
        $this->call(GenderTableSeeder::class);
        $this->call(religionTableSeeder::class);
    }
}
