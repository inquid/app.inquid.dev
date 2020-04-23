<?php

use App\Permission;
use App\Role;
use Illuminate\Database\Seeder;

class PermissionRoleTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = Permission::all();
        $roles       = Role::all();

        $roles->firstWhere('title', 'Admin')->permissions()->attach($permissions);

        $role = Role::where('title', 'Free Plan')->first()->permissions();
        $role->attach($permissions->firstWhere('title', 'mexican_access'));
        $role->attach($permissions->firstWhere('title', 'mexican_create'), ['max_amount' => 10]);
        $role->attach($permissions->firstWhere('title', 'thai_food_access'));
        $role->attach($permissions->firstWhere('title', 'thai_food_create'), ['max_amount' => 1]);
        $role->attach($permissions->firstWhere('title', 'japanese_access'));
        $role->attach($permissions->firstWhere('title', 'japanese_create'), ['max_amount' => 1]);
        $role->attach($permissions->firstWhere('title', 'chinesse_access'));
        $role->attach($permissions->firstWhere('title', 'chinesse_create'), ['max_amount' => 1]);
        $role->attach($permissions->firstWhere('title', 'profile_password_edit'));

        $role = Role::where('title', 'Small')->first()->permissions();
        $role->attach($permissions->firstWhere('title', 'mexican_access'));
        $role->attach($permissions->firstWhere('title', 'mexican_create'));
        $role->attach($permissions->firstWhere('title', 'thai_food_access'));
        $role->attach($permissions->firstWhere('title', 'thai_food_create'), ['max_amount' => 10]);
        $role->attach($permissions->firstWhere('title', 'spanish_access'));
        $role->attach($permissions->firstWhere('title', 'spanish_create'), ['max_amount' => 10]);
        $role->attach($permissions->firstWhere('title', 'french_access'));
        $role->attach($permissions->firstWhere('title', 'french_create'), ['max_amount' => 10]);
        $role->attach($permissions->firstWhere('title', 'japanese_access'));
        $role->attach($permissions->firstWhere('title', 'japanese_create'), ['max_amount' => 10]);
        $role->attach($permissions->firstWhere('title', 'korean_access'));
        $role->attach($permissions->firstWhere('title', 'korean_create'), ['max_amount' => 10]);
        $role->attach($permissions->firstWhere('title', 'venezuela_access'));
        $role->attach($permissions->firstWhere('title', 'venezuela_create'), ['max_amount' => 10]);
        $role->attach($permissions->firstWhere('title', 'central_america_access'));
        $role->attach($permissions->firstWhere('title', 'central_america_create'), ['max_amount' => 10]);
        $role->attach($permissions->firstWhere('title', 'caribe_access'));
        $role->attach($permissions->firstWhere('title', 'caribe_create'), ['max_amount' => 10]);
        $role->attach($permissions->firstWhere('title', 'chinesse_access'));
        $role->attach($permissions->firstWhere('title', 'chinesse_create'), ['max_amount' => 10]);
        $role->attach($permissions->firstWhere('title', 'profile_password_edit'));

        $role = Role::where('title', 'Medium')->first()->permissions();
        $role->attach($permissions->firstWhere('title', 'mexican_access'));
        $role->attach($permissions->firstWhere('title', 'mexican_create'));
        $role->attach($permissions->firstWhere('title', 'thai_food_access'));
        $role->attach($permissions->firstWhere('title', 'thai_food_create'), ['max_amount' => 20]);
        $role->attach($permissions->firstWhere('title', 'spanish_access'));
        $role->attach($permissions->firstWhere('title', 'spanish_create'), ['max_amount' => 20]);
        $role->attach($permissions->firstWhere('title', 'french_access'));
        $role->attach($permissions->firstWhere('title', 'french_create'), ['max_amount' => 20]);
        $role->attach($permissions->firstWhere('title', 'japanese_access'));
        $role->attach($permissions->firstWhere('title', 'japanese_create'), ['max_amount' => 20]);
        $role->attach($permissions->firstWhere('title', 'korean_access'));
        $role->attach($permissions->firstWhere('title', 'korean_create'), ['max_amount' => 20]);
        $role->attach($permissions->firstWhere('title', 'venezuela_access'));
        $role->attach($permissions->firstWhere('title', 'venezuela_create'), ['max_amount' => 20]);
        $role->attach($permissions->firstWhere('title', 'central_america_access'));
        $role->attach($permissions->firstWhere('title', 'central_america_create'), ['max_amount' => 20]);
        $role->attach($permissions->firstWhere('title', 'caribe_access'));
        $role->attach($permissions->firstWhere('title', 'caribe_create'), ['max_amount' => 20]);
        $role->attach($permissions->firstWhere('title', 'chinesse_access'));
        $role->attach($permissions->firstWhere('title', 'chinesse_create'), ['max_amount' => 20]);
        $role->attach($permissions->firstWhere('title', 'profile_password_edit'));

        $role = Role::where('title', 'Premium')->first()->permissions();
        $role->attach($permissions->firstWhere('title', 'mexican_access'));
        $role->attach($permissions->firstWhere('title', 'mexican_create'));
        $role->attach($permissions->firstWhere('title', 'thai_food_access'));
        $role->attach($permissions->firstWhere('title', 'thai_food_create'));
        $role->attach($permissions->firstWhere('title', 'spanish_access'));
        $role->attach($permissions->firstWhere('title', 'spanish_create'));
        $role->attach($permissions->firstWhere('title', 'french_access'));
        $role->attach($permissions->firstWhere('title', 'french_create'));
        $role->attach($permissions->firstWhere('title', 'japanese_access'));
        $role->attach($permissions->firstWhere('title', 'japanese_create'));
        $role->attach($permissions->firstWhere('title', 'korean_access'));
        $role->attach($permissions->firstWhere('title', 'korean_create'));
        $role->attach($permissions->firstWhere('title', 'venezuela_access'));
        $role->attach($permissions->firstWhere('title', 'venezuela_create'));
        $role->attach($permissions->firstWhere('title', 'central_america_access'));
        $role->attach($permissions->firstWhere('title', 'central_america_create'));
        $role->attach($permissions->firstWhere('title', 'caribe_access'));
        $role->attach($permissions->firstWhere('title', 'caribe_create'));
        $role->attach($permissions->firstWhere('title', 'chinesse_access'));
        $role->attach($permissions->firstWhere('title', 'chinesse_create'));
        $role->attach($permissions->firstWhere('title', 'profile_password_edit'));

    }
}
