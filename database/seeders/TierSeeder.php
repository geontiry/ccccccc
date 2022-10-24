<?php

namespace Database\Seeders;

use App\Models\Inventory\Stack;
use App\Models\Inventory\Tier;
use Illuminate\Database\Seeder;

class TierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sites = [
            ['stack_id'=>Stack::where('class', 'C0')->value('id'), 'name'=>'Tier1', 'range'=>'1 - 2', 'min'=>1, 'max'=>2],
            ['stack_id'=>Stack::where('class', 'C0')->value('id'), 'name'=>'Tier2', 'range'=>'3 - 6', 'min'=>4, 'max'=>6],
            ['stack_id'=>Stack::where('class', 'C0')->value('id'), 'name'=>'Tier3', 'range'=>'6 - 10', 'min'=>6, 'max'=>10],
            ['stack_id'=>Stack::where('class', 'C0')->value('id'), 'name'=>'Tier4', 'range'=>'>= 10', 'min'=>11, 'max'=>40],

            ['stack_id'=>Stack::where('class', 'C1')->value('id'), 'name'=>'Tier1', 'range'=>'1 - 5', 'min'=>1, 'max'=>5],
            ['stack_id'=>Stack::where('class', 'C1')->value('id'), 'name'=>'Tier2', 'range'=>'6 - 15', 'min'=>6, 'max'=>15],
            ['stack_id'=>Stack::where('class', 'C1')->value('id'), 'name'=>'Tier3', 'range'=>'16 - 30', 'min'=>16, 'max'=>30],
            ['stack_id'=>Stack::where('class', 'C1')->value('id'), 'name'=>'Tier4', 'range'=>'>= 30', 'min'=>31, 'max'=>100],

            ['stack_id'=>Stack::where('class', 'C2')->value('id'), 'name'=>'Tier1', 'range'=>'1 - 10', 'min'=>1, 'max'=>10],
            ['stack_id'=>Stack::where('class', 'C2')->value('id'), 'name'=>'Tier2', 'range'=>'10 - 25', 'min'=>11, 'max'=>25],
            ['stack_id'=>Stack::where('class', 'C2')->value('id'), 'name'=>'Tier3', 'range'=>'25 - 50', 'min'=>26, 'max'=>50],
            ['stack_id'=>Stack::where('class', 'C2')->value('id'), 'name'=>'Tier4', 'range'=>'>= 50', 'min'=>51, 'max'=>250],

            ['stack_id'=>Stack::where('class', 'C3')->value('id'), 'name'=>'Tier1', 'range'=>'1 - 20', 'min'=>1, 'max'=>20],
            ['stack_id'=>Stack::where('class', 'C3')->value('id'), 'name'=>'Tier2', 'range'=>'21 - 50', 'min'=>21, 'max'=>50],
            ['stack_id'=>Stack::where('class', 'C3')->value('id'), 'name'=>'Tier3', 'range'=>'51 - 100', 'min'=>51, 'max'=>100],
            ['stack_id'=>Stack::where('class', 'C3')->value('id'), 'name'=>'Tier4', 'range'=>'>= 100', 'min'=>101, 'max'=>500],

            ['stack_id'=>Stack::where('class', 'C4')->value('id'), 'name'=>'Tier1', 'range'=>'1 - 50', 'min'=>1, 'max'=>50],
            ['stack_id'=>Stack::where('class', 'C4')->value('id'), 'name'=>'Tier2', 'range'=>'51 - 200', 'min'=>51, 'max'=>200],
            ['stack_id'=>Stack::where('class', 'C4')->value('id'), 'name'=>'Tier3', 'range'=>'201 - 500', 'min'=>201, 'max'=>500],
            ['stack_id'=>Stack::where('class', 'C4')->value('id'), 'name'=>'Tier4', 'range'=>'>= 500', 'min'=>501, 'max'=>1000],

            ['stack_id'=>Stack::where('class', 'C5')->value('id'), 'name'=>'Tier1', 'range'=>'1 - 100', 'min'=>1, 'max'=>100],
            ['stack_id'=>Stack::where('class', 'C5')->value('id'), 'name'=>'Tier2', 'range'=>'101 - 400', 'min'=>101, 'max'=>400],
            ['stack_id'=>Stack::where('class', 'C5')->value('id'), 'name'=>'Tier3', 'range'=>'401 - 1000', 'min'=>401, 'max'=>1000],
            ['stack_id'=>Stack::where('class', 'C5')->value('id'), 'name'=>'Tier4', 'range'=>'>= 1000', 'min'=>1001, 'max'=>5000],
        ];
        foreach ($sites as $site) {
            Tier::updateOrCreate($site);
        }
    }
}
