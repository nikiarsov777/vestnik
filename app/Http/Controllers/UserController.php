<?php

namespace App\Http\Controllers;

use App\Http\Services\CategoryService;
use App\Http\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class UserController extends Controller
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
        $users = $this->userService->index();
        $params = array_merge(
            [
                'web' => 'layouts.partials.admin.users.index',
                'users' => $users,
                'classNames' => $this->classNames,
                'title' => __('Потребители'),
            ],
            $this->categories,
        );
        return view('admin', $params);
    }

    public function show(Request $request, int $id)
    {
        $user = $this->userService->show($id);
        $params = array_merge(
            [
                'web' => 'layouts.partials.admin.users.show',
                'user' => $user,
                'classNames' => $this->classNames,
                'title' => __('Потребители'),
            ],
            $this->categories,
        );
        return view('admin', $params);
    }
}
