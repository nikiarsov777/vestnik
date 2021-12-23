<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use function view;

class UserController extends AdminController
{

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
                'schools' => $this->schools,
                'schoolName' => '',
                'schoolId' => '',

            ],
            $this->categories,
        );

        return view('admin', $params);
    }
}
