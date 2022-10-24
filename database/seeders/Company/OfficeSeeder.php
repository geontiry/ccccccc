<?php

namespace Database\Seeders\Company;

use App\Models\Company\Department;
use App\Models\Company\Office;
use Illuminate\Database\Seeder;

class OfficeSeeder extends Seeder
{
    public function run()
    {
        // Office::factory(92)->create();
        require database_path('data/company.php');

        foreach ($companies as $company) {
            foreach ($company['directorates'] as $directorate) {
                foreach ($directorate['departments'] as $department) {
                    if (count($department['offices']) > 0) {
                        foreach ($department['offices'] as $office) {
                            $record = [
                                'department_id' => Department::where('name', $department['name'])->value('id'),
                                'name' => $office['name'],
                                'route' => $office['route'],
                            ];
                            Office::updateOrCreate($record);
                        }
                    }
                }
            }
        }
    }
}
