<?php

namespace App\Http\Controllers\Admin;

use App\Models\SchoolUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use function view;

class UserController extends AdminController
{

    public function index(Request $request)
    {
        $this->userService->setUser(Auth::user());

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
        $this->userService->setUser(Auth::user());

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
                'roles' => $this->roles,

            ],
            $this->categories,
        );

        return view('admin', $params);
    }

    public function create(Request $request)
    {
        $this->userService->setUser(Auth::user());

        $this->validator($request->all())->validate();
    }

    public function update(Request $request, int $id)
    {
        $this->userService->setUser(Auth::user());
        
        $validator = $this->validator($request->all());
        $user = User::findOrFail($id);
        if($validator->fails()) {
            return redirect()->route('users.show', $id)->withErrors($validator->errors())->withInput();
        }



        if($request->has('email')) {
            $user->email = $request->get('email');
        }

        if($request->has('first_name')) {
            $user->first_name = $request->get('first_name');
        }

        if($request->has('last_name')) {
            $user->last_name = $request->get('last_name');
        }

        if($request->has('password') && $request->get('password')) {
            $user->password = $request->get('password');
        }

        if($request->has('is_active') ) {
            $user->is_active = 1;
        } else {
            $user->is_active = 0;
        }

        $user->save();

        if($request->has('role_ids')) {
            $roleIds = array_unique($request->get('role_ids'));
            foreach ($roleIds as $roleId) {
                if($roleId != 1 && !$request->get('school_id')) {
                    $validator->errors()->add('school', 'Моля, изберете училище!');
                    return redirect()->route('users.show', $id)->withErrors($validator->errors())->withInput();
                }
            }
            $user->roles()->detach();
            $user->roles()->attach($roleIds);
        }

        if($request->has('school_id') && $request->has('class_name')) {
            $schoolId = $request->get('school_id');
            $className = $request->get('class_name');
            $schoolUsers = SchoolUser::where('user_id', $user->id)->where('active', 1)->get();
            foreach($schoolUsers as $schoolUser) {
                $schoolUser->active = 0;
                $schoolUser->save();
            }
            $user->schools()->attach($schoolId, ['class_name' => $className]);
            $user->school = $schoolId;
            $user->class_name = $className;
            $user->save();
        }

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
                'school' => ['required_if:role_ids,1','nullable', 'max:255'],
                'school_id' => ['required_with:school', 'nullable'],
                'class_name' => ['required_with:school', 'nullable'],
                'email' => ['nullable', 'string', 'email', 'max:255'],
                'password' => ['nullable', 'min:8', 'confirmed'],
                'password_confirmation' => ['required_with:password', 'nullable', 'min:8'],
                'role_ids' => ['required', 'array'],
                'is_active' => ['nullable', 'integer'],
            ],
            [
                'school.gt' => 'Моля, изберете училище!',
                'school.required' => 'Моля, изберете училище!',
                'school_id.required_with' => 'Моля, изберете училище!',
                'class_name.required_with' => 'Моля, изберете паралелка!',
                'group.gt' => 'Моля, изберете паралелка!',
                'group.required' => 'Моля, изберете паралелка!',
                'email.unique' => 'Тази поща вече е заета!',
                'password.required' => 'Моля, въведете парола!',
                'password.confirmed' => 'Паролите не съвпадат!',
                'password_confirmation.required' => 'Моля, въведете парола за потвърждение!',
                'role_ids.required' => 'Моля, въведете роля!'
            ]
        );
    }
}
