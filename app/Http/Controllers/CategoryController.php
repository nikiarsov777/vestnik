<?php

namespace App\Http\Controllers;

use App\Http\Services\CategoryService;
use App\Http\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class CategoryController extends Controller
{
    private $categories = [];
    private $categoryService = null;
    private $userService = null;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->categoryService = new CategoryService();
        $this->userService = new UserService();
        $this->categories = $this->categoryService->index();
    }


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
