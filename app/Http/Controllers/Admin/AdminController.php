<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Services\CategoryService;
use App\Http\Services\UserService;
use Illuminate\Http\Request;
use function view;

class AdminController extends Controller
{
    protected $categories = [];
    protected $categoryService = null;
    protected $userService = null;
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

}
