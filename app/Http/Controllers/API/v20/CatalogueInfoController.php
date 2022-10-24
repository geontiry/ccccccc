<?php

namespace App\Http\Controllers\API\v20;

use App\Http\Controllers\Controller;
use App\Models\Catalogue\Category;
use Illuminate\Http\Request;

class CatalogueInfoController extends Controller
{
    public function categories(Request $request, $site)
    {
        $constraint = function ($query) {
            $query->select(['id', 'name', 'depth']);
        };

        $categories = Category::query()
            ->where('site_id', $site)
            // ->select(['id', 'name',])
            // ->with('descendants')
            // ->whereNull('parent_id')
            // ->with([
            //     'divisions' => function ($q) {
            //         $q->select([ 'id', 'category_id', 'name', 'description' ]);
            //     },
            //     'divisions.listings' => function ($q) {
            //         $q->select([ 'id', 'division_id', 'name', 'description', ]);
            //     }
            // ])
            // ->treeOf($constraint)->get()->toTree();
            ->tree()->get()->toTree();

        // dd($categories);

        return response()->success($categories);
    }
    public function catalogues(Request $request, $site)
    {
    }
}
