<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // \App\Models\Catalogue\Catalogue::factory()->count(45)->create();
        // \App\Models\Catalogue\Product::factory()->count(345)->create();
        // \App\Models\Catalogue\Image::factory()->count(245)->create();
        // \App\Models\Catalogue\Feature::factory()->count(5)->create();
        $this->call([
            /* -- USER-- */
            /* -- LOCATION-- */
            \Database\Seeders\Location\RegionSeeder::class,
            \Database\Seeders\Location\CountySeeder::class,
            \Database\Seeders\Location\SubcountySeeder::class,
            \Database\Seeders\Location\DemographSeeder::class,
            \Database\Seeders\Location\LocationSeeder::class,
            /* -- COMPANY-- */
            \Database\Seeders\Company\CompanySeeder::class,
            \Database\Seeders\Company\DirectorateSeeder::class,
            \Database\Seeders\Company\DepartmentSeeder::class,
            \Database\Seeders\Company\OfficeSeeder::class,
            /* -- BUSINESS-- */
            \Database\Seeders\Business\BusinessSeeder::class,
            \Database\Seeders\Business\SiteSeeder::class,
            // \Database\Seeders\Business\PageSeeder::class,
            // \Database\Seeders\Business\OperationSeeder::class,
            // \Database\Seeders\Business\ContactSeeder::class,
            /* -- DASHBOARD-- */
            /* -- ASSET-- */
            /* -- CAREER-- */
            /* -- EMPLOYEE-- */
            /* -- CATALOGUE-- */
            \Database\Seeders\Catalogue\CatalogueSeeder::class,
            \Database\Seeders\Catalogue\CategorySeeder::class,
            // \Database\Seeders\Catalogue\ListingSeeder::class,
            /* -- SUPPLIER-- */
            /* -- INVENTORY-- */
            /* -- PRICING-- */
            /* -- PAYMENT-- */
            /* -- SHIPMENT-- */
            /* -- SALE-- */
            /* -- RELATION-- */
        ]);
    }
}
