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
                'view',
            ],

            'user' => [
                'view',
                'create',
                'update',
                'delete',
            ],

            'role' => [
                'view',
                'create',
                'update',
                'delete',
            ],
        ];

        foreach ($permissions as $permission => $actions) {
            foreach ($actions as $action) {
                Permission::create([
                    'name' => $permission . '_' . $action,
                    'group' => $permission,
                    'guard_name' => 'web',
                ]);
            }
        }
    }
}
