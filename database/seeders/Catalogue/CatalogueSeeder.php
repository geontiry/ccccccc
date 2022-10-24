<?php

namespace Database\Seeders\Catalogue;

use App\Models\Catalogue\Catalogue;
use Illuminate\Database\Seeder;

class CatalogueSeeder extends Seeder
{
    public function run()
    {
        $catalogues = [
            ["name" => "Category", "description" => "",],
            ["name" => "Division", "description" => "",],
            ["name" => "Class", "description" => "",],
            ["name" => "Group", "description" => "",],
            ["name" => "List", "description" => "",],
        ];

        foreach ($catalogues as $catalogue) {
            $record =  [
                "name" => $catalogue["name"],
                "description" => $catalogue["description"],
            ];
            Catalogue::updateOrCreate($record);
        }
    }
}
