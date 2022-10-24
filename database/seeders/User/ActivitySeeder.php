<?php

namespace Database\Seeders\User;

use App\Models\User\Activity;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Activity::factory(357)->create();
    }
}
