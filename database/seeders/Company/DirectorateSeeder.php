<?php

namespace Database\Seeders\Company;

use App\Models\Company\Company;
use App\Models\Company\Directorate;
use Illuminate\Database\Seeder;

class DirectorateSeeder extends Seeder
{
    public function run()
    {
        // Directorate::factory(8)->create();
        require database_path('data/company.php');

        foreach ($companies as $company) {
            foreach ($company['directorates'] as $directorate) {
                $record = [
                    'company_id' => Company::where('name', 'SGB Company')->value('id'),
                    'name' => $directorate['name'],
                    'code' => $directorate['code'],
                    'route' => $directorate['route'],
                ];
                Directorate::updateOrCreate($record);
            }
        }
    }
}
