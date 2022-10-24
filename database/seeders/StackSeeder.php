<?php

namespace Database\Seeders;

use App\Models\Catalogue\Stack;
use Illuminate\Database\Seeder;

class StackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stacks = [
            ['name'=>'Class 0', 'class'=>'C0', 'minorder'=>1, 'maxorder'=>30],
            ['name'=>'Class 1', 'class'=>'C1', 'minorder'=>1, 'maxorder'=>100],
            ['name'=>'Class 2', 'class'=>'C2', 'minorder'=>1, 'maxorder'=>250],
            ['name'=>'Class 3', 'class'=>'C3', 'minorder'=>1, 'maxorder'=>500],
            ['name'=>'Class 4', 'class'=>'C4', 'minorder'=>1, 'maxorder'=>1000],
            ['name'=>'Class 5', 'class'=>'C5', 'minorder'=>1, 'maxorder'=>5000],
        ];
        foreach ($stacks as $stack) {
            Stack::updateOrCreate($stack);
        }
    }
}
