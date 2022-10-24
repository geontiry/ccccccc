<?php

namespace Database\Seeders\Catalogue;

use App\Models\Catalogue\Category;
use App\Models\Catalogue\Listing;
use Illuminate\Database\Seeder;

class ListingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'Standard' => [
                "Incandescent",
                "Fluorescent",
                "Halogen",
                "Energy-Saving",
                "LED",
                "HID"
            ],
            'Classic' => [
                "Pendants",
                "Chandaliers",
                "Sconces",
                "Panels",
                "Downlights",
                "Spotlights",
                'Snakelights',
                "Vintages",
                "Lanterns",
                "Domes",
                "Canisters",
            ]
        ];
        foreach ($data as $category => $catalogues) {
            foreach ($catalogues as $catalogue) {
                $record = [
                    'category_id' => Category::where('name', $category)->value('id'),
                    'name' => $catalogue,
                    'description' => ''
                ];
                Listing::updateOrCreate($record);
            }
        }

        /*
        //Standard Design
        Catalogue::create([
            'code' => 1000011, 'brand' => 'Brenden', 'site' => 'Web', 'class' => 'Product', 'type' => 'Websites', 'category' => 'Standard', 'subcategory' => 'Static',
        ]);
        Catalogue::create([
            'code' => 1000012, 'brand' => 'Brenden', 'site' => 'Web', 'class' => 'Product', 'type' => 'Websites', 'category' => 'Standard', 'subcategory' => 'Dynamic',
        ]);
        Catalogue::create([
            'code' => 1000013, 'brand' => 'Brenden', 'site' => 'Web', 'class' => 'Product', 'type' => 'Websites', 'category' => 'Standard', 'subcategory' => 'Dashboard',
        ]);
        Catalogue::create([
            'code' => 1000014, 'brand' => 'Brenden', 'site' => 'Web', 'class' => 'Product', 'type' => 'Websites', 'category' => 'Standard', 'subcategory' => 'Complete',
        ]);
        //Custom Design
        Catalogue::create([
            'code' => 1000021, 'brand' => 'Brenden', 'site' => 'Web', 'class' => 'Product', 'type' => 'Websites', 'category' => 'Custom', 'subcategory' => 'Static',
        ]);
        Catalogue::create([
            'code' => 1000022, 'brand' => 'Brenden', 'site' => 'Web', 'class' => 'Product', 'type' => 'Websites', 'category' => 'Custom', 'subcategory' => 'Dynamic',
        ]);
        Catalogue::create([
            'code' => 1000023, 'brand' => 'Brenden', 'site' => 'Web', 'class' => 'Product', 'type' => 'Websites', 'category' => 'Custom', 'subcategory' => 'Dashboard',
        ]);
        Catalogue::create([
            'code' => 1000024, 'brand' => 'Brenden', 'site' => 'Web', 'class' => 'Product', 'type' => 'Websites', 'category' => 'Custom', 'subcategory' => 'Complete',
        ]);
        //ReDesign
        Catalogue::create([
            'code' => 1000031, 'brand' => 'Brenden', 'site' => 'Web', 'class' => 'Product', 'type' => 'Websites', 'category' => 'Redesign', 'subcategory' => 'Static',
        ]);
        Catalogue::create([
            'code' => 1000032, 'brand' => 'Brenden', 'site' => 'Web', 'class' => 'Product', 'type' => 'Websites', 'category' => 'Redesign', 'subcategory' => 'Dynamic',
        ]);
        Catalogue::create([
            'code' => 1000033, 'brand' => 'Brenden', 'site' => 'Web', 'class' => 'Product', 'type' => 'Websites', 'category' => 'Redesign', 'subcategory' => 'Dashboard',
        ]);
        Catalogue::create([
            'code' => 1000034, 'brand' => 'Brenden', 'site' => 'Web', 'class' => 'Product', 'type' => 'Websites', 'category' => 'Redesign', 'subcategory' => 'Complete',
        ]);*/
    }
}
