<?php

use App\Models\User;

test("Unauthenticated user can't see the role list", function () {
    $response = $this->get(route('settings.role.index'));
    $response->assertRedirect(route('login'));
});

test("Authenticated user can't see the role list because insufficient role", function () {
    $user = User::factory()->create();
    $this->actingAs($user);
    $response = $this->get(route('settings.role.index'));
    $response->assertStatus(403);
});

test("Authenticated user can see the role list", function () {

    $role = \App\Models\Role::factory()->create([
        'name' => 'superuser',
        'guard_name' => 'web',
    ]);
    $user = User::factory()->create();
    $user->assignRole($role);

    $this->actingAs($user);
    $response = $this->get(route('settings.role.index'));
    $response->assertStatus(200);
});

test('Unauthenticated user can not view the form create.', function () {
    $response = $this->get(route('settings.role.create'));
    $response->assertRedirect(route('login'));
});

test('Authenticated user can not view the form create because insufficient role.', function () {
    $user = User::factory()->create();
    $this->actingAs($user);
    $response = $this->get(route('settings.role.create'));
    $response->assertStatus(403);
});

test("Authenticated user can view the form create.", function () {
    $role = \App\Models\Role::factory()->create([
        'name' => 'superuser',
        'guard_name' => 'web',
    ]);
    $user = User::factory()->create();
    $user->assignRole($role);

    $this->actingAs($user);
    $response = $this->get(route('settings.role.create'));
    $response->assertStatus(200);
});

test("Authenticated user can create a new role", function () {
    $role = \App\Models\Role::factory()->create([
        'name' => 'superuser',
        'guard_name' => 'web',
    ]);
    $user = User::factory()->create();
    $user->assignRole($role);

    $permissions = \App\Models\Permission::factory(5)->create();
    $permissionNames = \App\Models\Permission::factory(5)->create()->pluck('name')->toArray();
    $permissionIds = \App\Models\Permission::whereIn('name', $permissionNames)->pluck('id')->toArray();

    $this->actingAs($user);
    $response = $this->post(route('settings.role.store'), [
        'name' => 'test_role',
        'permissions' => $permissionNames,
    ]);


    $response->assertRedirect(route('settings.role.index'));
    $this->assertDatabaseHas('roles', [
        'name' => 'test_role',
        'guard_name' => 'web',
    ]);

    $role = \App\Models\Role::where('name', 'test_role')->first();

    $this->assertDatabaseHas('role_has_permissions', [
        'role_id' => $role->id,
        'permission_id' => $permissionIds[0],
    ]);

    $this->assertDatabaseHas('role_has_permissions', [
        'role_id' => $role->id,
        'permission_id' => $permissionIds[1],
    ]);
});

test("Authenticated user can not create a new role because insufficient role", function () {
    $user = User::factory()->create();
    $this->actingAs($user);
    $response = $this->post(route('settings.role.store'), [
        'name' => 'test_role',
        'permissions' => [],
    ]);
    $response->assertStatus(403);
});

test("Authenticated user can not create a new role because invalid data", function () {
    $role = \App\Models\Role::factory()->create([
        'name' => 'superuser',
        'guard_name' => 'web',
    ]);
    $user = User::factory()->create();
    $user->assignRole($role);

    $this->actingAs($user);
    $response = $this->post(route('settings.role.store'), [
        'name' => '',
        'permissions' => [],
    ]);
    $response->assertSessionHasErrors(['name', 'permissions']);
});

test("Authenticated user can view the form edit.", function () {
    $role = \App\Models\Role::factory()->create([
        'name' => 'superuser',
        'guard_name' => 'web',
    ]);

    $dataRole = \App\Models\Role::factory()->create([
        'name' => 'test_role',
        'guard_name' => 'web',
    ]);

    $user = User::factory()->create();
    $user->assignRole($role);

    $this->actingAs($user);
    $response = $this->get(route('settings.role.edit', ['role' => $dataRole->id]));
    $response->assertStatus(200);
});

test("Authenticated user can not view the form edit because insufficient role.", function () {
    $user = User::factory()->create();

    $dataRole = \App\Models\Role::factory()->create([
        'name' => 'test_role',
        'guard_name' => 'web',
    ]);

    $this->actingAs($user);
    $response = $this->get(route('settings.role.edit', ['role' => $dataRole->id]));
    $response->assertStatus(403);
});

test("Authenticated user can not view the form edit because role not found.", function () {
    $role = \App\Models\Role::factory()->create([
        'name' => 'superuser',
        'guard_name' => 'web',
    ]);

    $user = User::factory()->create();
    $user->assignRole($role);

    $this->actingAs($user);
    $response = $this->get(route('settings.role.edit', ['role' => 999]));
    $response->assertStatus(404);
});

test("Authenticated user can update a role", function () {
    $role = \App\Models\Role::factory()->create([
        'name' => 'superuser',
        'guard_name' => 'web',
    ]);

    $dataRole = \App\Models\Role::factory()->create([
        'name' => 'test_role',
        'guard_name' => 'web',
    ]);

    $user = User::factory()->create();
    $user->assignRole($role);

    $permissions = \App\Models\Permission::factory(5)->create();
    $permissionNames = \App\Models\Permission::factory(5)->create()->pluck('name')->toArray();
    $permissionIds = \App\Models\Permission::whereIn('name', $permissionNames)->pluck('id')->toArray();

    $this->actingAs($user);
    $response = $this->put(route('settings.role.update', ['role' => $dataRole->id]), [
        'name' => 'test_role_updated',
        'permissions' => $permissionNames,
    ]);

    $response->assertRedirect(route('settings.role.index'));
    $this->assertDatabaseHas('roles', [
        'name' => 'test_role_updated',
        'guard_name' => 'web',
    ]);

    $role = \App\Models\Role::where('name', 'test_role_updated')->first();

    $this->assertDatabaseHas('role_has_permissions', [
        'role_id' => $role->id,
        'permission_id' => $permissionIds[0],
    ]);

    $this->assertDatabaseHas('role_has_permissions', [
        'role_id' => $role->id,
        'permission_id' => $permissionIds[1],
    ]);
});

test("Authenticated user can not update a role because insufficient role", function () {
    $user = User::factory()->create();

    $role = \App\Models\Role::factory()->create([
        'name' => 'test_role',
        'guard_name' => 'web',
    ]);

    $this->actingAs($user);
    $response = $this->put(route('settings.role.update', ['role' => $role->id]), [
        'name' => 'test_role_updated',
        'permissions' => [],
    ]);
    $response->assertStatus(403);
});

test("Authenticated user can not update a role because invalid data", function () {
    $role = \App\Models\Role::factory()->create([
        'name' => 'superuser',
        'guard_name' => 'web',
    ]);

    $dataRole = \App\Models\Role::factory()->create([
        'name' => 'test_role',
        'guard_name' => 'web',
    ]);

    $user = User::factory()->create();
    $user->assignRole($role);

    $this->actingAs($user);
    $response = $this->put(route('settings.role.update', ['role' => $dataRole->id]), [
        'name' => '',
        'permissions' => [],
    ]);
    $response->assertSessionHasErrors(['name', 'permissions']);
});


test("Authenticated user can delete a role", function () {
    $role = \App\Models\Role::factory()->create([
        'name' => 'superuser',
        'guard_name' => 'web',
    ]);

    $dataRole = \App\Models\Role::factory()->create([
        'name' => 'test_role',
        'guard_name' => 'web',
    ]);

    $user = User::factory()->create();
    $user->assignRole($role);

    $this->actingAs($user);
    $response = $this->delete(route('settings.role.destroy', ['role' => $dataRole->id]));

    $response->assertRedirect(route('settings.role.index'));
    $this->assertDatabaseMissing('roles', [
        'name' => 'test_role',
        'guard_name' => 'web',
    ]);
});

test("Authenticated user can not delete a role because insufficient role", function () {
    $user = User::factory()->create();

    $role = \App\Models\Role::factory()->create([
        'name' => 'test_role',
        'guard_name' => 'web',
    ]);

    $this->actingAs($user);
    $response = $this->delete(route('settings.role.destroy', ['role' => $role->id]));
    $response->assertStatus(403);
});

test("Authenticated user can not delete a role because role not found", function () {
    $role = \App\Models\Role::factory()->create([
        'name' => 'superuser',
        'guard_name' => 'web',
    ]);

    $user = User::factory()->create();
    $user->assignRole($role);

    $this->actingAs($user);
    $response = $this->delete(route('settings.role.destroy', ['role' => 999]));
    $response->assertStatus(404);
});

test("Authenticated user can not delete a role because role is superuser", function () {
    $role = \App\Models\Role::factory()->create([
        'name' => 'superuser',
        'guard_name' => 'web',
    ]);

    $user = User::factory()->create();
    $user->assignRole($role);

    $this->actingAs($user);
    $response = $this->delete(route('settings.role.destroy', ['role' => $role->id]));
    $response->assertStatus(403);
});
