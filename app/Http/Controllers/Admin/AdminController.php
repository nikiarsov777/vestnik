<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Services\CategoryService;
use App\Http\Services\ToolService;
use App\Http\Services\UserService;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function view;

class AdminController extends Controller
{
    protected $categories = [];
    protected $schools = [];
    protected $categoryService = null;
    protected $userService = null;
    protected $toolService = null;
    protected $roles = null;
    protected $user = null;
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
        $this->toolService = new ToolService();
        $this->categories = $this->categoryService->index();
        $this->schools = $this->toolService->getSchools();

        $this->roles = Role::all();
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
