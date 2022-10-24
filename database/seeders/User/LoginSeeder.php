<?php

namespace Database\Seeders\User;

use App\Models\User\Login;
use Illuminate\Database\Seeder;

class LoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Login::factory(451)->create();
    }
}
