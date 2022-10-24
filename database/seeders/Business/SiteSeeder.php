<?php

namespace Database\Seeders\Business;

use App\Models\Business\Business;
use App\Models\Business\Site;
use Illuminate\Database\Seeder;

class SiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Site::factory(32)->create();
        require database_path('data/business.php');

        foreach ($businesses as $business) {
            foreach ($business['sites'] as $site) {
                $record = [
                    'business_id'=>Business::where('brand', $business['brand'])->value('id'),
                    'name' => $site['name'],
                    'domain' => $site['domain'],
                    'description' => $site['description'],
                    'enabled' => $site['enabled'],
                ];
                Site::updateOrCreate($record);
            }
        }
    }
}
