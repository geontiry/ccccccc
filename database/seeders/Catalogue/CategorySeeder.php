<?php

namespace Database\Seeders\Catalogue;

use App\Models\Business\Site;
use App\Models\Catalogue\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            [ NULL, 'pCategory1' ],
            [ NULL, 'pCategory2' ],
            [ NULL, 'pCategory3' ],
            [ 1, 'cCategory-1' ],
            [ 4, 'cCategory-2' ],
            [ 2, 'cCategory-3' ],
            [ 3, 'cCategory-4' ],
            [ 1, 'cCategory-5' ],
            [ 5, 'cCategory-6' ],
            [ 4, 'cCategory-7' ],
            [ 6, 'cCategory-8' ],
            [ 4, 'cCategory-9' ],
            [ 7, 'cCategory-10' ],
            [ 4, 'cCategory-11' ],
            [ 5, 'cCategory-12' ],
            [ 7, 'cCategory-13' ],
            [ 6, 'cCategory-14' ],
            [ 8, 'cCategory-15' ],
            [ 9, 'cCategory-16' ],
            [ 10, 'cCategory-17' ],
        ];
        
        foreach($categories as list($parent, $name)){
            $record =  [
                'site_id' => Site::where('name', 'Electrical')->value('id'),
                'catalogue_id' => 2,
                'parent_id' => $parent,
                'name' => $name,
                'slug' => Str::slug($name, '-'),
                'description' => '',
            ];
            Category::updateOrCreate($record);
        }
        
        
        // require database_path('data/catalogue.php');

        // $counter = 0;

        // foreach($iterator as $key => $value)
        // {
        //     if ($key == 'name') {
        //         $name = $value;
        //     }

            // $record =  [
            //     'site_id' => Site::where('name', 'Electrical')->value('id'),
            //     'catalogue_id' => 2,
            //     'parent_id' => NULL,
            //     'name' => $counter,
            //     'slug' => '4',
            //     'description' => '',
            // ];
            // Category::updateOrCreate($record);
        //     $counter++;
        // }
    }
}
