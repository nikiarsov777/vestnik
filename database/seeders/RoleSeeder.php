<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
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
                'name' => 'admin',
            ],
            [
                'name' => 'principal',
            ],
            [
                'name' => 'editor',
            ],
            [
                'name' => 'publisher',
            ],
            [
                'name' => 'visitor',
            ],

        ];

        foreach ($items as $item) {
            if (Role::where('name', $item['name'])->exists()) {
                $role = Role::where('name', $item['name'])->firstOrFail();
            } else {
                $role = new Role;
            }

            foreach ($item as $key => $val) {
                $role->{$key} = $val;
            }
            $role->save();
        }
    }
}
