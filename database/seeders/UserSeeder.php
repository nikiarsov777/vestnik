<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
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
                'first_name' => 'Admin',
                'last_name' => null,
                'is_active' => 1,
                'email' => 'super@supreme.bg',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('krokodil123'),
                'id_role'   => 1
            ],

        ];

        foreach ($items as $item) {
            $role = null;
            if (User::where('email', $item['email'])->exists()) {
                $user = User::where('email', $item['email'])->firstOrFail();
            } else {
                $user = new User;
            }

            foreach ($item as $key => $val) {
                if($key == 'id_role') {
                    $role = Role::findOrFail($val);
                } else {
                    $user->{$key} = $val;
                }
            }
            $user->save();
            $user->roles()->detach();
            if ($role) {
                $user->roles()->attach($role->id);
            }
        }
    }
}
