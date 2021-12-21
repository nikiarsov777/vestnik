<?php

namespace App\Http\Controllers;

use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::where('parent_id', null)->
                                orderBy('order')->
                                orderBy('name')->get();
        return view('home', ['categories' => $categories]);
    }
}
