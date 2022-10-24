<?php

namespace Database\Seeders\Business;

use App\Models\Business\Operation;
use Illuminate\Database\Seeder;

class OperationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Operation::factory(478)->create();
    }
}
