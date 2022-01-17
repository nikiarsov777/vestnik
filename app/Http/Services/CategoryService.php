<?php

namespace App\Http\Services;


use App\Models\BaseModel;
use App\Models\Category;

class CategoryService extends BaseService
{

    public function __construct()
    {
        $this->params = [];
    }

    public function index(): array
    {
        $this->params['categories'] = Category::orderBy('order')->get();

        $subCategoriesArr = [];
        $categoriesById = [];

        foreach ($this->params['categories'] as $category) {
            if ($category->parent_id != null) {
                $subCategoriesArr[$category->parent_id][] = $category;
            }
            $categoriesById[$category->id] = $category;
        }

        return ['categories' => $this->params['categories'], 'subCategories' => $subCategoriesArr, 'categoriesById' => $categoriesById];
    }

    public function show(string $name): ?BaseModel
    {
        return Category::where('slug', $name)->firstOrFail();
    }

    public function create(array $params): void
    {

    }

    public function update(array $params): ?BaseModel
    {
        return BaseModel();
    }

    public function delete(array $params): void
    {

    }

    public function menu(): array
    {
        $this->params['categories'] = Category::orderBy('order')->where('active' , '!=', 0)
            ->where('show', '!=', 0)
            ->orderBy('name')->get();

        $subCategoriesArr = [];
        $categoriesById = [];

        foreach ($this->params['categories'] as $category) {
            if ($category->parent_id != null) {
                $subCategoriesArr[$category->parent_id][] = $category;
            }
            $categoriesById[$category->id] = $category;
        }

        return ['categories' => $this->params['categories'], 'subCategories' => $subCategoriesArr, 'categoriesById' => $categoriesById];
    }
}
