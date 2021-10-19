<?php

namespace Database\Seeders;

use App\Models\LastRun;
use App\Models\Runner;
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
        Runner::factory(10)->create();
        LastRun::factory(50)->create();
    }
}
