<?php

namespace Database\Seeders;

use App\Models\School;
use Illuminate\Database\Seeder;
use Eloquent;

class SchoolTableSeeder extends Seeder
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
                'name' => '1 СОУ',
                'active' => 1
            ],
            [
                'name' => '101 СУ Бачо Киро',
                'active' => 1
            ],
            [
                'name' => '133 СУ Александър Пушкин',
                'active' => 1
            ],
            [
                'name' => '144 СУ Народни Будители',
                'active' => 1
            ],
        ];

        foreach ($items as $item) {
            if (School::where('name', $item['name'])->exists()) {
                $school = School::where('name', $item['name'])->first();
            } else {
                $school = new School;
            }

            $school->name = $item['name'];
            $school->active = $item['active'];
            $school->save();
        }
    }
}
