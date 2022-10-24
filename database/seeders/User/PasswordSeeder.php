<?php

namespace Database\Seeders\User;

use App\Models\User\Password;
use Illuminate\Database\Seeder;

class PasswordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Password::factory(647)->create();
    }
}
