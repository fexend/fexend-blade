<?php


use App\Models\Role;
use App\Models\Permission;
use App\Supports\Str;
use Illuminate\Support\Facades\DB;

beforeEach(function () {
    Role::factory()->create(['name' => 'superuser']);
});

test('it creates permissions successfully', function () {
    $this->artisan('app:make-permission')
        ->expectsQuestion('Enter the group name for the permission', 'user')
        ->expectsQuestion('Enter permission name (or type "done" to finish)', 'create')
        ->expectsQuestion('Enter permission name (or type "done" to finish)', 'read')
        ->expectsQuestion('Enter permission name (or type "done" to finish)', 'update')
        ->expectsQuestion('Enter permission name (or type "done" to finish)', 'done')
        ->expectsOutput('Permissions created successfully.')
        ->expectsOutput('Permissions: user create, read, update')
        ->assertExitCode(0);

    $this->assertDatabaseHas('permissions', ['name' => 'user create', 'group' => 'user']);
    $this->assertDatabaseHas('permissions', ['name' => 'user read', 'group' => 'user']);
    $this->assertDatabaseHas('permissions', ['name' => 'user update', 'group' => 'user']);
});

test('it gives error for empty group name', function () {
    $this->artisan('app:make-permission')
        ->expectsQuestion('Enter the group name for the permission', '')
        ->expectsOutput('Group name cannot be empty.')
        ->expectsQuestion('Enter the group name for the permission', 'user')
        ->expectsQuestion('Enter permission name (or type "done" to finish)', 'create')
        ->expectsQuestion('Enter permission name (or type "done" to finish)', 'done')
        ->expectsOutput('Permissions created successfully.')
        ->expectsOutput('Permissions: user create')
        ->assertExitCode(0);
});

test('it prompts again for empty permission name', function () {
    $this->artisan('app:make-permission')
        ->expectsQuestion('Enter the group name for the permission', 'user')
        ->expectsQuestion('Enter permission name (or type "done" to finish)', '')
        ->expectsOutput('Permission name cannot be empty.')
        ->expectsQuestion('Enter permission name (or type "done" to finish)', 'create')
        ->expectsQuestion('Enter permission name (or type "done" to finish)', 'done')
        ->expectsOutput('Permissions created successfully.')
        ->assertExitCode(0);

    $this->assertDatabaseHas('permissions', ['name' => 'user create', 'group' => 'user']);
});

test('it prompts again for duplicate permission name', function () {
    $this->artisan('app:make-permission')
        ->expectsQuestion('Enter the group name for the permission', 'user')
        ->expectsQuestion('Enter permission name (or type "done" to finish)', 'create')
        ->expectsQuestion('Enter permission name (or type "done" to finish)', 'create')
        ->expectsOutput('Permission name already exists. Please enter a different name.')
        ->expectsQuestion('Enter permission name (or type "done" to finish)', 'update')
        ->expectsQuestion('Enter permission name (or type "done" to finish)', 'done')
        ->expectsOutput('Permissions created successfully.')
        ->assertExitCode(0);

    $this->assertDatabaseHas('permissions', ['name' => 'user create', 'group' => 'user']);
    $this->assertDatabaseHas('permissions', ['name' => 'user update', 'group' => 'user']);
});

test('it exits when no permissions provided', function () {
    $this->artisan('app:make-permission')
        ->expectsQuestion('Enter the group name for the permission', 'user')
        ->expectsQuestion('Enter permission name (or type "done" to finish)', 'done')
        ->expectsOutput('No permissions provided. Exiting command.')
        ->assertExitCode(0);

    $this->assertDatabaseMissing('permissions', ['group' => 'user']);
});

test('it checks for existing permissions', function () {
    // Create a permission first
    DB::table('permissions')->insert([
        'id' => (string) Str::uuid(),
        'name' => 'user create',
        'group' => 'user',
        'guard_name' => 'web',
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    $this->artisan('app:make-permission')
        ->expectsQuestion('Enter the group name for the permission', 'user')
        ->expectsQuestion('Enter permission name (or type "done" to finish)', 'create')
        ->expectsQuestion('Enter permission name (or type "done" to finish)', 'done')
        ->expectsOutput('The following permissions already exist: user create')
        ->assertExitCode(0);
});

test('it gives error when superuser role does not exist', function () {
    Role::where('name', 'superuser')->delete();

    $this->artisan('app:make-permission')
        ->expectsOutput('Superuser role not found.')
        ->assertExitCode(0);
});

test('permissions are correctly assigned to superuser role', function () {
    $superuser = Role::where('name', 'superuser')->first();

    $this->artisan('app:make-permission')
        ->expectsQuestion('Enter the group name for the permission', 'article')
        ->expectsQuestion('Enter permission name (or type "done" to finish)', 'publish')
        ->expectsQuestion('Enter permission name (or type "done" to finish)', 'done')
        ->expectsOutput('Permissions created successfully.')
        ->assertExitCode(0);

    $this->assertTrue($superuser->hasPermissionTo('article publish'));
});

test('it displays correct output message after creating permissions', function () {
    $this->artisan('app:make-permission')
        ->expectsQuestion('Enter the group name for the permission', 'product')
        ->expectsQuestion('Enter permission name (or type "done" to finish)', 'list')
        ->expectsQuestion('Enter permission name (or type "done" to finish)', 'view')
        ->expectsQuestion('Enter permission name (or type "done" to finish)', 'done')
        ->expectsOutput('Permissions created successfully.')
        ->expectsOutput('Permissions: product list, view')
        ->assertExitCode(0);
});

test('it handles multiple groups in one session', function () {
    $this->artisan('app:make-permission')
        ->expectsQuestion('Enter the group name for the permission', 'page')
        ->expectsQuestion('Enter permission name (or type "done" to finish)', 'edit')
        ->expectsQuestion('Enter permission name (or type "done" to finish)', 'done')
        ->expectsOutput('Permissions created successfully.')
        ->assertExitCode(0);

    $this->assertDatabaseHas('permissions', ['name' => 'page edit', 'group' => 'page']);
});
