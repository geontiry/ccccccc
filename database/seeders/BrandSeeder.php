<?php

namespace Database\Seeders;

use App\Models\Catalogue\Brand;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brands = [
            ['Siemens', 'https://picsum.photos/id/0/200/300'],
            ['Havells', 'https://picsum.photos/id/1048/200/300'],
            ['Phillips', 'https://picsum.photos/id/1068/200/300'],
            ['Schneider', 'https://picsum.photos/id/1076/200/300'],
            ['Bosch', 'https://picsum.photos/id/1081/200/300'],
        ];
        foreach ($brands as $brand) {
            $record =  [  'name' => $brand[0], 'logo' => $brand[1], ];
            Brand::updateOrCreate($record);
        }
    }
}
