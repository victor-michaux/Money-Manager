<?php

namespace App\Http\Controllers\API;

use App\Category;
use App\Http\Controllers\Controller;
use App\Transformers\CategoryTransformer;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return fractal()
            ->collection($categories)
            ->transformWith(new CategoryTransformer())
            ->toArray();
    }
}
