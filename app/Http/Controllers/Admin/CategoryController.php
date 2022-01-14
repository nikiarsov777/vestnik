<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function view;

class CategoryController extends AdminController
{
    public function index(Request $request)
    {
        $this->userService->setUser(Auth::user());
        $categories = $this->categoryService->index();
        $params = array_merge(
            [
                'web' => 'layouts.partials.admin.categories.index',
                'title' => __('Категории'),
                'classNames' => $this->classNames,
                'allCategories' => $categories['categories'],
                'allSubCategories' => $categories['subCategories'],
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
