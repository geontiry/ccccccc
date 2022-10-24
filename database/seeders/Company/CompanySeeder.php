<?php

namespace Database\Seeders\Company;

use App\Models\Company\Company;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    public function run()
    {
        // Company::factory(3)->create();

        require database_path('data/company.php');

        foreach ($companies as $company) {
            $record = [
                'name' => $company['name'],
                'description'=> $company['description'],
                'logo'=> $company['logo'],
                'slogan'=> $company['slogan'],
            ];
            Company::updateOrCreate($record);
        }
    }
}
