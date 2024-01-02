<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Account\Role;
use App\Models\Account\Permission;
use App\Models\Account\User;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        // Create roles
        Role::create([
            'name' => 'admin',
            'label' => 'Administrator',
        ]);

        Role::create([
            'name' => 'user',
            'label' => 'Regular User',
        ]);

        // Create additional roles as needed
        // ...


    }
}