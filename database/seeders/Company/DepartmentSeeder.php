<?php

namespace Database\Seeders\Company;

use App\Models\Company\Department;
use App\Models\Company\Directorate;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Department::factory(24)->create();
        require database_path('data/company.php');

        foreach ($companies as $company) {
            foreach ($company['directorates'] as $directorate) {
                foreach ($directorate['departments'] as $department) {
                    $record =  [
                        'directorate_id' => Directorate::where('code', $directorate['code'])->value('id'),
                        'name' => $department['name'],
                        'route' => $department['route'],
                    ];
                    Department::updateOrCreate($record);
                }
            }
        }
    }
}
