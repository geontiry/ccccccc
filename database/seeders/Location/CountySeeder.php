<?php

namespace Database\Seeders\Location;

use App\Models\Location\County;
use App\Models\Location\Region;
use Illuminate\Database\Seeder;

class CountySeeder extends Seeder
{
    public function run()
    {
        //    County::factory(47)->create();

        $counties = [
            [ 'Coast', 'Mombasa ', 'Mombasa', 212.5, 0 ],
            [ 'Coast', 'Kwale ', 'Kwale ', 8270.3, 0 ],
            [ 'Coast', 'Kilifi ', 'Kilifi ', 12245.9, 0 ],
            [ 'Coast', 'Tana River ', 'Hola ', 35375.8, 0 ],
            [ 'Coast', 'Lamu ', 'Lamu ', 6497.7, 0 ],
            [ 'Coast', 'Taita Taveta ', 'Mwatate ', 17083.9, 0 ],
            [ 'North Eastern', 'Garissa ', 'Garissa ', 45720.2, 0 ],
            [ 'North Eastern', 'Wajir ', 'Wajir ', 55840.6, 0 ],
            [ 'North Eastern', 'Mandera ', 'Mandera ', 25797.7, 0 ],
            [ 'Eastern', 'Marsabit ', 'Marsabit ', 66923.1, 0 ],
            [ 'Eastern', 'Isiolo ', 'Isiolo ', 25336.1, 0 ],
            [ 'Eastern', 'Meru ', 'Meru ', 6930.1, 0 ],
            [ 'Eastern', 'Tharaka Nithi ', 'Kathwana ', 2409.5, 0 ],
            [ 'Eastern', 'Embu ', 'Embu ', 2555.9, 0 ],
            [ 'Eastern', 'Kitui ', 'Kitui ', 24385.1, 0 ],
            [ 'Eastern', 'Machakos ', 'Machakos ', 5952.9, 0 ],
            [ 'Eastern', 'Makueni ', 'Wote ', 8008.9, 0 ],
            [ 'Central', 'Nyandarua ', 'Ol Kalou ', 3107.7, 0 ],
            [ 'Central', 'Nyeri ', 'Nyeri ', 2361, 0 ],
            [ 'Central', 'Kirinyaga ', 'Kerugoya', 1205.4, 0 ],
            [ 'Central', 'Murang\'a', 'Murang\'a ', 2325.8, 0 ],
            [ 'Central', 'Kiambu ', 'Kiambu ', 2449.2, 0 ],
            [ 'Rift Valley', 'Turkana ', 'Lodwar ', 71597.8, 0 ],
            [ 'Rift Valley', 'West Pokot ', 'Kapenguria ', 8418.2, 0 ],
            [ 'Rift Valley', 'Samburu ', 'Maralal ', 20182.5, 0 ],
            [ 'Rift Valley', 'Trans Nzoia ', 'Kitale ', 2469.9, 0 ],
            [ 'Rift Valley', 'Uasin Gishu ', 'Eldoret ', 2955.3, 1 ],
            [ 'Rift Valley', 'Elgeyo Marakwet ', 'Iten ', 3049.7, 0 ],
            [ 'Rift Valley', 'Nandi ', 'Kapsabet ', 2884.5, 0 ],
            [ 'Rift Valley', 'Baringo ', 'Kabarnet ', 11075.3, 0 ],
            [ 'Rift Valley', 'Laikipia ', 'Rumuruti ', 8696.1, 0 ],
            [ 'Rift Valley', 'Nakuru ', 'Nakuru ', 7509.5, 1 ],
            [ 'Rift Valley', 'Narok ', 'Narok ', 17921.2, 0 ],
            [ 'Rift Valley', 'Kajiado ', 'Kajiado ', 21292.7, 0 ],
            [ 'Rift Valley', 'Kericho ', 'Kericho ', 2454.5, 0 ],
            [ 'Rift Valley', 'Bomet ', 'Bomet ', 1997.9, 0 ],
            [ 'Western', 'Kakamega ', 'Kakamega ', 3033.8, 0 ],
            [ 'Western', 'Vihiga ', 'Vihiga ', 531.3, 0 ],
            [ 'Western', 'Bungoma ', 'Bungoma ', 2206.9, 1 ],
            [ 'Western', 'Busia ', 'Busia ', 1628.4, 0 ],
            [ 'Nyanza', 'Siaya ', 'Siaya ', 2496.1, 0 ],
            [ 'Nyanza', 'Kisumu ', 'Kisumu', 2009.5, 0 ],
            [ 'Nyanza', 'Homa Bay ', 'Homa Bay ', 3154.7, 0 ],
            [ 'Nyanza', 'Migori ', 'Migori ', 2586.4, 0 ],
            [ 'Nyanza', 'Kisii ', 'Kisii ', 1317.9, 0 ],
            [ 'Nyanza', 'Nyamira ', 'Nyamira ', 912.5, 0 ],
            [ 'Nairobi', 'Nairobi City', 'Nairobi', 694.9, 0 ]
        ];
        foreach ($counties as list($region, $name, $capital, $area, $status)) {
            $record = [
                'region_id'=>Region::where('name', $region)->value('id'),
                'name'=>$name,
                'status'=>$status,
            ];
            County::updateOrCreate($record);
        }
    }
}
