<?php

namespace App\Http\Controllers;

use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('order')->
                                orderBy('name')->get();

        $subCategoriesArr = [];

        foreach ($categories as $category) {
            if ($category->parent_id != null) {
                $subCategoriesArr[$category->parent_id][] = $category;
            }
        }
        return view('home', ['categories' => $categories, 'subCategories' => $subCategoriesArr]);
    }
}
