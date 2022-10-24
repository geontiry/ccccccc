<?php

namespace Database\Seeders\Catalogue;

use App\Models\Catalogue\Category;
use App\Models\Catalogue\Division;
use Illuminate\Database\Seeder;

class DivisionSeeder extends Seeder
{
    public function run()
    {
        require database_path('data/catalogue.php');

        foreach ($catalogs as $site => $categories) {
            foreach ($categories as $category) {
                foreach ($category['divisions'] as $division) {
                    $record = [
                        'category_id' => Category::where('name', $category["name"])->value('id'),
                        'name' => $division["name"],
                        'description' => ''
                    ];
                    Division::updateOrCreate($record);
                }
            }
        }

        /*[ 'type_id'=>Type::where('name', 'Design')->value('id'), 'code'=>1, 'name'=>'Standard'],
            [ 'type_id'=>Type::where('name', 'Design')->value('id'), 'code'=>2, 'name'=>'Custom'],
            [ 'type_id'=>Type::where('name', 'Design')->value('id'), 'code'=>3, 'name'=>'Upgrade'],

            [ 'type_id'=>Type::where('name', 'Domain')->value('id'), 'code'=>1, 'name'=>'Register'],
            [ 'type_id'=>Type::where('name', 'Domain')->value('id'), 'code'=>2, 'name'=>'Transfer'],

            [ 'type_id'=>Type::where('name', 'Hosting')->value('id'), 'code'=>1, 'name'=>'Webhost'],
            [ 'type_id'=>Type::where('name', 'Hosting')->value('id'), 'code'=>2, 'name'=>'Reseller'],*/
    }
}


// public function run()
    // {
    //     $subcategories = [
    //         ['category_code'=>Category::where('name', 'Standard')->value('code'), 'code'=>0, 'name'=>'Static'],
    //         ['category_code'=>Category::where('name', 'Standard')->value('code'), 'code'=>1, 'name'=>'Dynamic'],
    //         ['category_code'=>Category::where('name', 'Standard')->value('code'), 'code'=>2, 'name'=>'Dashboard'],
    //         ['category_code'=>Category::where('name', 'Standard')->value('code'), 'code'=>3, 'name'=>'Complete'],
    //     ];
    //     foreach($subcategories as $subcategory){
    //         Subcategory::updateOrCreate($subcategory);
    //     }
    // }
