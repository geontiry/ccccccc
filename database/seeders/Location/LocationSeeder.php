<?php

namespace Database\Seeders\Location;

use App\Models\Location\Location;
use App\Models\Location\Subcounty;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    public function run()
    {
        // Location::factory(810)->create();

        $locations = [
          [ 'Kanduyi', 'Bukembe', '1182 - 50200, Bungoma', 'Bukembe Centre Next to Tripple 5 Building', 1 ]
        ];

        foreach ($locations as list($subcounty, $name, $address, $directions, $status)) {
            $record = [
                'subcounty_id'=>Subcounty::where('name', $subcounty)->value('id'),
                'name' => $name,
                'address'=> $address,
                'directions'=> $directions,
                'status'=> $status,
            ];
            Location::updateOrCreate($record);
        }
    }
}
