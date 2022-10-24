<?php

namespace Database\Seeders\Location;

use App\Models\Location\Region;
use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    public function run()
    {
        //    Region::factory(8)->create();

        $regions = [
            'Nairobi',
            'Rift Valley',
            'Western',
            'Nyanza',
            'Central',
            'Coast',
            'Eastern',
            'North Eastern',
        ];
        foreach ($regions as $region) {
            $record = ['name' => $region];
            Region::updateOrCreate($record);
        }
    }
}
