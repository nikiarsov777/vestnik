<?php

namespace App\Http\Controllers;

use App\Http\Services\CategoryService;
use App\Http\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class AdminController extends Controller
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
        $params = array_merge(
            [
                'web' => 'layouts.partials.admin.categories.index',
                'title' => __('Категории'),
            ],
            $this->categories);
        return view('admin', $params);
    }

    public function categoryShow(Request $request, string $name)
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


    public function users(Request $request)
    {
        $users = $this->userService->index();
        $params = array_merge(
            [
                'web' => 'layouts.partials.admin.users.index',
                'users' => $users,
                'title' => __('Потребители'),
            ],
            $this->categories,
        );
        return view('admin', $params);
    }

    public function userShow(Request $request, int $id)
    {
        $user = $this->userService->show($id);
        $params = array_merge(
            [
                'web' => 'layouts.partials.admin.users.show',
                'user' => $user,
                'title' => __('Потребители'),
            ],
            $this->categories,
        );
        return view('admin', $params);
    }
}
