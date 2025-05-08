<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissionNames = Permission::all()->pluck('name');
        $roleNames = ['superuser'];
        foreach ($roleNames as $roleName) {
            Role::create(['name' => $roleName]);
            $role = Role::where('name', $roleName)->first();
            foreach ($permissionNames as $permissionName) {
                $role->givePermissionTo($permissionName);
            }
        }
    }
}
