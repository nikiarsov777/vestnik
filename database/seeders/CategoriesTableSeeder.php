<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
                'name' => 'Литература',
                'order' => 1,
                'slug' => 'literature',
            ],
            [
                'name' => 'Поезия',
                'order' => 1,
                'parent_id' => 'Литература',
                'slug' => 'poetry',
            ],
            [
                'name' => 'Проза',
                'order' => 2,
                'parent_id' => 'Литература',
                'slug' => 'prose',
            ],
            [
                'name' => 'Математика',
                'order' => 3,
                'slug' => 'maths',
            ],
            [
                'name' => 'Физика',
                'order' => 4,
                'slug' => 'physics',
            ],
            [
                'name' => 'Астрономия',
                'order' => 1,
                'parent_id' => 'Физика',
                'slug' => 'astronomy',
            ],
            [
                'name' => 'Химия',
                'order' => 6,
                'slug' => 'chemistry',
            ],
            [
                'name' => 'Музика',
                'order' => 7,
                'slug' => 'music',
            ],
            [
                'name' => 'Рок',
                'order' => 1,
                'parent_id' => 'Музика',
                'slug' => 'rock',
            ],
            [
                'name' => 'Класика',
                'order' => 2,
                'parent_id' => 'Музика',
                'slug' => 'classic',
            ],

        ];

        foreach ($items as $item) {
            if (Category::where('name', $item['name'])->exists()) {
                $category = Category::where('name', $item['name'])->firstOrFail();
            } else {
                $category = new Category;
            }

            if (isset($item['parent_id'])) {
                $parentCategory = Category::where('name', $item['parent_id'])->firstOrFail();
                $item['parent_id'] = $parentCategory->id;
            }

            foreach ($item as $key => $val) {
                $category->{$key} = $val;
            }
            $category->save();
        }
    }
}
