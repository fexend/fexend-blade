<?php

namespace App\Console\Commands\Permision;

use App\Models\Role;
use App\Supports\Str;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class MakePermission extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:make-permission';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Make permission for the application';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $superuserRole = Role::where('name', 'superuser')->first();
        if (is_null($superuserRole)) {
            $this->error('Superuser role not found.');
            return;
        }

        /**
         * Ask for the group name for the permission
         * and ensure it is not empty.
         * If the group name is empty, prompt the user to enter it again.
         * This loop will continue until a valid group name is provided.
         */
        while (true) {
            $groupName = $this->ask('Enter the group name for the permission');
            if (empty($groupName)) {
                $this->error('Group name cannot be empty.');
                continue;
            }

            break;
        }

        /**
         * Ask for the permission names
         * and ensure they are not empty.
         * If the permission name is empty, prompt the user to enter it again.
         * This loop will continue until a valid permission name is provided.
         */
        $permissions = [];
        while (true) {
            $permission = $this->ask('Enter permission name (or type "done" to finish)');
            if ($permission === 'done') {
                break;
            }

            if (empty($permission)) {
                $this->error('Permission name cannot be empty.');
                continue;
            }

            if (in_array($permission, $permissions)) {
                $this->error('Permission name already exists. Please enter a different name.');
                continue;
            }

            $permissions[] = $permission;
        }

        /**
         * Check if any permissions were provided.
         * If no permissions were provided, exit the command.
         */
        if (empty($permissions)) {
            $this->error('No permissions provided. Exiting command.');
            return;
        }

        /**
         * Check if the permissions already exist in the database.
         * If they do, exit the command.
         */
        $existingPermissions = DB::table('permissions')
            ->whereIn('name', array_map(function ($permission) use ($groupName) {
                return "$groupName $permission";
            }, $permissions))
            ->pluck('name')
            ->toArray();

        if (!empty($existingPermissions)) {
            $this->error('The following permissions already exist: ' . implode(', ', $existingPermissions));
            return;
        }


        /**
         * Insert the new permissions into the database.
         * Use a transaction to ensure that all permissions are created successfully.
         * If any error occurs, roll back the transaction.
         * This ensures that the database remains consistent.
         */
        DB::beginTransaction();
        try {

            $permissionData = collect($permissions)->map(function ($permission) use ($groupName) {
                return [
                    'id' => (string) Str::uuid(),
                    'name' => "$groupName $permission",
                    'group' => $groupName,
                    'guard_name' => 'web',
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            })->toArray();

            DB::table('permissions')->insert($permissionData);

            foreach ($permissions as $permission) {
                $superuserRole->givePermissionTo("$groupName $permission");
            }
        } catch (\Exception $e) {
            DB::rollBack();
            $this->error('Failed to create permissions: ' . $e->getMessage());

            return;
        }

        DB::commit();

        $this->info('Permissions created successfully.');
        $this->info('Permissions: ' . $groupName . " " . implode(', ', $permissions));
    }
}
