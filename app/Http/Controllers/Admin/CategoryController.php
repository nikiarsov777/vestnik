<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use function view;

class CategoryController extends AdminController
{
    public function index(Request $request)
    {
        $this->categoryService->setUser(Auth::user());
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
        $this->categoryService->setUser(Auth::user());
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

    public function update(Request $request, string $slug)
    {
        $this->categoryService->setUser(Auth::user());

        $validator = $this->validator($request->all());
        if($validator->fails()) {
            return redirect()->route('categories.show', $slug)->withErrors($validator->errors())->withInput();
        }

        $category = Category::where('slug', $slug)->firstOrFail();

        if($request->has('name')) {
            $category->name = $request->get('name');
        }

        if($request->has('slug')) {
            $category->slug = $request->get('slug');
        }

        if($request->has('active')) {
            $category->active = 1;
        }  else {
            $category->active = 0;
        }

        if($request->has('show')) {
            $category->show = 1;
        } else {
            $category->show = 0;
        }

        $category->save();

        return redirect()->route('categories.show', $category->slug)->withInput();
    }

    protected function validator(array $data):  \Illuminate\Validation\Validator
    {
        return Validator::make($data,
            [
                'name' => ['nullable', 'max:255'],
                'slug' => ['nullable', 'max:15'],
                'active' => ['nullable', 'integer'],
                'show' => ['nullable', 'integer'],
                'order' => ['nullable', 'integer'],
            ],
            [

            ]
        );
    }
}
