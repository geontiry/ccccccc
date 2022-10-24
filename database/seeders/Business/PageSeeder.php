<?php

namespace Database\Seeders\Business;

use App\Models\Business\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Page::factory(392)->create();
    }
}
