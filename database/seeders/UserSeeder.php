<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roleNames = Role::all()->pluck('name');
        foreach ($roleNames as $roleName) {
            $user = User::factory()->create([
                'name' => ucfirst($roleName) . ' User',
                'email' => strtolower($roleName) . '@example.com',
            ]);

            $user->assignRole($roleName);
        }
    }
}
