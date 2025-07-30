<?php

test("Unauthenticated user cannot access permission list", function () {
    $response = $this->get(route('settings.permission.index'));
    $response->assertRedirect(route('login'));
});

test("Authenticated user cannot access permission list due to insufficient permissions", function () {
    $user = \App\Models\User::factory()->create();
    $this->actingAs($user);
    $response = $this->get(route('settings.permission.index'));
    $response->assertStatus(403);
});

test("Authenticated user can access permission list", function () {
    $role = \App\Models\Role::factory()->create([
        'name' => 'superuser',
        'guard_name' => 'web',
    ]);
    $user = \App\Models\User::factory()->create();
    $user->assignRole($role);

    $this->actingAs($user);
    $response = $this->get(route('settings.permission.index'));
    $response->assertStatus(200);
});

test("Authenticated user cannot access permission list because insufficient permission", function () {
    $role = \App\Models\Role::factory()->create([
        'name' => 'test_role',
        'guard_name' => 'web',
    ]);

    $user = \App\Models\User::factory()->create();
    $user->assignRole($role);
    $this->actingAs($user);
    $response = $this->get(route('settings.permission.index'));
    $response->assertStatus(403);
});


test("Unauthenticated user cannot view create permission form", function () {
    $response = $this->get(route('settings.permission.create'));
    $response->assertRedirect(route('login'));
});

test("Authenticated user cannot view create permission form due to insufficient permissions", function () {
    $user = \App\Models\User::factory()->create();
    $this->actingAs($user);
    $response = $this->get(route('settings.permission.create'));
    $response->assertStatus(403);
});

test("Authenticated user can view create permission form", function () {
    $role = \App\Models\Role::factory()->create([
        'name' => 'superuser',
        'guard_name' => 'web',
    ]);
    $user = \App\Models\User::factory()->create();
    $user->assignRole($role);

    $this->actingAs($user);
    $response = $this->get(route('settings.permission.create'));
    $response->assertStatus(200);
});

test("Authenticated user cannot view create permission form due insufficient permissions", function () {
    $role = \App\Models\Role::factory()->create([
        'name' => 'test_role',
        'guard_name' => 'web',
    ]);
    $user = \App\Models\User::factory()->create();
    $user->assignRole($role);
    $this->actingAs($user);
    $response = $this->get(route('settings.permission.create'));
    $response->assertStatus(403);
});

test("Authenticated user can create a new permission", function () {
    $role = \App\Models\Role::factory()->create([
        'name' => 'superuser',
        'guard_name' => 'web',
    ]);
    $user = \App\Models\User::factory()->create();
    $user->assignRole($role);

    $this->actingAs($user);
    $response = $this->post(route('settings.permission.store'), [
        'guard_name' => 'web',
        'group' => 'test_group',
        'name' => [
            'test_permission',
            'test permission 2'
        ],
    ]);
    $response->assertRedirect(route('settings.permission.index'));
    $this->assertDatabaseHas('permissions', [
        'name' => 'test_group test_permission',
        'guard_name' => 'web',
    ]);

    $this->assertDatabaseHas('permissions', [
        'name' => 'test_group test permission 2',
        'guard_name' => 'web',
    ]);
});

test("Authenticated user cannot create a new permission due to insufficient permissions", function () {
    $role = \App\Models\Role::factory()->create([
        'name' => 'test_role',
        'guard_name' => 'web',
    ]);
    $user = \App\Models\User::factory()->create();
    $user->assignRole($role);

    $this->actingAs($user);
    $response = $this->post(route('settings.permission.store'), [
        'guard_name' => 'web',
        'group' => 'test_group',
        'name' => [
            'test_permission',
            'test permission 2'
        ],
    ]);
    $response->assertStatus(403);
});

test("Authenticated user can update a permission", function () {
    $role = \App\Models\Role::factory()->create([
        'name' => 'superuser',
        'guard_name' => 'web',
    ]);
    $user = \App\Models\User::factory()->create();
    $user->assignRole($role);

    $permission = \App\Models\Permission::factory()->create([
        'name' => 'test_permission',
        'guard_name' => 'web',
    ]);

    $this->actingAs($user);
    $response = $this->put(route('settings.permission.update', $permission->id), [
        'name' => 'test_group updated_permission',
        'guard_name' => 'web',
        'group' => 'test_group',
    ]);
    $response->assertRedirect(route('settings.permission.index'));
    $this->assertDatabaseHas('permissions', [
        'name' => 'test_group updated_permission',
        'guard_name' => 'web',
    ]);
});

test("Authenticated user cannot update a permission due to insufficient permissions", function () {
    $role = \App\Models\Role::factory()->create([
        'name' => 'test_role',
        'guard_name' => 'web',
    ]);
    $user = \App\Models\User::factory()->create();
    $user->assignRole($role);

    $permission = \App\Models\Permission::factory()->create([
        'name' => 'test_permission',
        'guard_name' => 'web',
    ]);

    $this->actingAs($user);
    $response = $this->put(route('settings.permission.update', $permission->id), [
        'name' => 'updated_permission',
        'guard_name' => 'web',
        'group' => 'test_group',
    ]);
    $response->assertStatus(403);
});

test("Authenticated user can delete a permission", function () {
    $role = \App\Models\Role::factory()->create([
        'name' => 'superuser',
        'guard_name' => 'web',
    ]);
    $user = \App\Models\User::factory()->create();
    $user->assignRole($role);

    $permission = \App\Models\Permission::factory()->create([
        'name' => 'test_permission',
        'guard_name' => 'web',
    ]);

    $this->actingAs($user);
    $response = $this->delete(route('settings.permission.destroy', $permission->id));
    $response->assertRedirect(route('settings.permission.index'));
    $this->assertDatabaseMissing('permissions', [
        'name' => 'test_permission',
        'guard_name' => 'web',
    ]);
});

test("Authenticated user cannot delete a permission due to insufficient permissions", function () {
    $role = \App\Models\Role::factory()->create([
        'name' => 'test_role',
        'guard_name' => 'web',
    ]);
    $user = \App\Models\User::factory()->create();
    $user->assignRole($role);

    $permission = \App\Models\Permission::factory()->create([
        'name' => 'test_permission',
        'guard_name' => 'web',
    ]);

    $this->actingAs($user);
    $response = $this->delete(route('settings.permission.destroy', $permission->id));
    $response->assertStatus(403);
});
