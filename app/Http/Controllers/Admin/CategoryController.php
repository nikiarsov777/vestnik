<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use function view;

class CategoryController extends AdminController
{
    public function index(Request $request)
    {
        $params = array_merge(
            [
                'web' => 'layouts.partials.admin.categories.index',
                'title' => __('Категории'),
            ],
            $this->categories);
        return view('admin', $params);
    }

    public function show(Request $request, string $name)
    {

        $category = $this->categoryService->show($name);
        $params = array_merge(
            [
                'web' => 'layouts.partials.admin.categories.show',
                'category' => $category,
                'title' => __('Категории'),
            ],
            $this->categories,
        );
        return view('admin', $params);
    }
}
