<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
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

    public function create(Request $request)
    {
        $this->validator($request->all())->validate();
    }

    public function update(Request $request, int $id)
    {
        $validator = $this->validator($request->all());
        $user = User::findOrFail($id);
        if($validator->fails()) {
            return redirect()->route('users.show', $id)->withErrors($validator->errors())->withInput();
        }



        if($request->get('email')) {
            $user->email = $request->get('email');
        }

        if($request->get('first_name')) {
            $user->first_name = $request->get('first_name');
        }

        if($request->get('last_name')) {
            $user->last_name = $request->get('last_name');
        }

        if($request->get('password')) {
            $user->password = $request->get('password');
        }

        $user->save();

        session()->flash('message', __('Успешно променихте потребител ' . $request->get('first_name')));
        return redirect()->route('users.show', $id)->withInput();
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Validation\Validator
     */
    protected function validator(array $data):  \Illuminate\Validation\Validator
    {
        return Validator::make($data,
            [
                'first_name' => ['nullable', 'max:255'],
                'last_name' => ['nullable', 'max:255'],
                'school' => ['nullable', 'max:255'],
                'school_id' => ['required_with:school', 'nullable'],
                'class_name' => ['required_with:school', 'nullable'],
                'email' => ['required', 'string', 'email', 'max:255'],
                'password' => ['nullable', 'min:8', 'confirmed'],
                'password_confirmation' => ['required_with:password', 'nullable', 'min:8'],
            ],
            [
                'school.gt' => 'Моля, изберете училище!',
                'school.required' => 'Моля, изберете училище!',
                'school_id.required_with' => 'Моля, изберете училище!',
                'class_name.required_with' => 'Моля, изберете паралелка!',
                'group.gt' => 'Моля, изберете паралелка!',
                'group.required' => 'Моля, изберете паралелка!',
                'email.required' => 'Моля, изберете ел. поща!',
                'email.unique' => 'Тази поща вече е заета!',
                'password.required' => 'Моля, въведете парола!',
                'password.confirmed' => 'Паролите не съвпадат!',
                'password_confirmation.required' => 'Моля, въведете парола за потвърждение!',
            ]
        );
    }
}
