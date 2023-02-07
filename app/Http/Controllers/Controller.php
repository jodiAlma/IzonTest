<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function view_category()
    {
        $category=Category::all();
        return response()->json([$category]);
    }
    public function view_service_byCategory($category)
    {
        $categor=Category::findOrFail($category);
        $categor->service;
        return response()->json([$categor->service]);


    }
}
