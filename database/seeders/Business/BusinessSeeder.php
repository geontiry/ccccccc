<?php

namespace Database\Seeders\Business;

use App\Models\Business\Business;
use App\Models\Company\Company;
use Illuminate\Database\Seeder;

class BusinessSeeder extends Seeder
{
    public function run()
    {
        // Business::factory(5)->create();
        require database_path('data/business.php');

        foreach ($businesses as $business) {
            $record = [
                'company_id' => Company::where('name', 'SGB Company')->value('id'),
                'code' => 0,
                'name' => $business['name'],
                'brand' => $business['brand'],
                'domain' => $business['domain'],
                'description' => '',
                'logo' => '',
                'slogan' => ''
            ];
            Business::updateOrCreate($record);
        }
    }
}
