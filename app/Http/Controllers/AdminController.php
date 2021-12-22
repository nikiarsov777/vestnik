<?php

namespace App\Http\Controllers;

use App\Http\Services\CategoryService;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class AdminController extends Controller
{
    private $categories = [];
    private $categoryService = null;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->categoryService = new CategoryService();
        $this->categories = $this->categoryService->index();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        return view('admin', $this->categories);
    }

    public function categories(Request $request)
    {
        $params = array_merge(['web' => 'layouts.partials.admin.categories'],$this->categories);
        return view('admin', $params);
    }

    public function categoryShow(Request $request, string $name)
    {

        $category = $this->categoryService->show($name);
        $params = array_merge(
            [
                'web' => 'layouts.partials.admin.categories',
                'category' => $category
            ],
            $this->categories,
        );
        return view('admin', $params);
    }


    public function users(Request $request)
    {
        $params = array_merge(['web' => 'layouts.partials.admin.users'],$this->categories);
        return view('admin', $params);
    }
}
