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
            ],
            [
                'name' => 'Поезия',
                'order' => 1,
                'parent_id' => 'Литература',
            ],
            [
                'name' => 'Проза',
                'order' => 2,
                'parent_id' => 'Литература',
            ],
            [
                'name' => 'Математика',
                'order' => 3,
            ],
            [
                'name' => 'Физика',
                'order' => 4,
            ],
            [
                'name' => 'Астрономия',
                'order' => 1,
                'parent_id' => 'Физика',
            ],
            [
                'name' => 'Химия',
                'order' => 6,
            ],
            [
                'name' => 'Музика',
                'order' => 7,
            ],
            [
                'name' => 'Рок',
                'order' => 1,
                'parent_id' => 'Музика',
            ],
            [
                'name' => 'Класика',
                'order' => 2,
                'parent_id' => 'Музика',
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
