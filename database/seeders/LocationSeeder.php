<?php

namespace Database\Seeders;

use App\Models\Location\County;
use App\Models\Location\Location;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $locations = [
            ['Nakuru', 'Nakuru', 'Head', 'Warehouse', 'Showroom'],
            ['Nakuru', 'Naivasha', 'Branch', 'Depot', 'Showroom'],
            ['Nakuru', 'Njoro', 'Station', 'Pickup', 'Shop'],
            ['Nakuru', 'Egerton', 'Station', 'Pickup', 'Shop'],
            ['Bungoma', 'Bungoma', 'Head', 'Warehouse', 'Showroom'],
            ['Bungoma', 'Bukembe', 'Station', 'Depot', 'Shop'],
            ['Uasin Gishu', 'Eldoret', 'Main', 'Warehouse', 'Showroom'],
        ];
        foreach ($locations as $location) {
            $record = ['county_id'=>County::where('name', $location[0])->value('id'), 'name'=>$location[1], 'office'=>$location[2], 'store'=>$location[3], 'room'=>$location[4]];
            Location::updateOrCreate($record);
        }
    }
}
