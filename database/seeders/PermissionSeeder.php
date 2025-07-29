<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'documentation' => [
                'view-list',
            ],

            'user' => [
                'view-list',
                'create',
                'view-detail',
                'update',
                'delete',
            ],

            'role' => [
                'view',
                'create',
                'view-detail',
                'update',
                'delete',
            ],

            'permission' => [
                'view-list',
                'create',
                'view-detail',
                'update',
                'delete',
            ],
        ];

        foreach ($permissions as $permission => $actions) {
            foreach ($actions as $action) {
                Permission::create([
                    'name' => $permission . ' ' . $action,
                    'group' => $permission,
                    'guard_name' => 'web',
                ]);
            }
        }
    }
}
