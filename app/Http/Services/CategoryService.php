<?php

namespace App\Http\Services;


use App\Models\BaseModel;
use App\Models\Category;

class CategoryService extends BaseService
{

    public function index(): array
    {

        $categories = Category::orderBy('order')->
        orderBy('name')->get();

        $subCategoriesArr = [];

        foreach ($categories as $category) {
            if ($category->parent_id != null) {
                $subCategoriesArr[$category->parent_id][] = $category;
            }
        }

        return ['categories' => $categories, 'subCategories' => $subCategoriesArr];
    }

    public function show(string $name): ?BaseModel
    {
        return Category::where('slug', $name)->first();
    }

    public function create(array $params): void
    {

    }

    public function update(array $params): ?BaseModel
    {

    }

    public function delete(array $params): void
    {

    }
}
