<?php

namespace Database\Seeders\Business;

use App\Models\Business\Contact;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::factory(122)->create();
    }
}
