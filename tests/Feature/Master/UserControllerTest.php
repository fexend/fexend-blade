<?php

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;

beforeEach(function () {
    Permission::factory()->create(['name' => 'user view-list', 'group' => 'user']);
    Permission::factory()->create(['name' => 'user create', 'group' => 'user']);
    Permission::factory()->create(['name' => 'user view-detail', 'group' => 'user']);
    Permission::factory()->create(['name' => 'user update', 'group' => 'user']);
    Permission::factory()->create(['name' => 'user delete', 'group' => 'user']);
});

test("Unauthenticated users cannot access the user management page", function () {
    $response = $this->get(route("master.user.index"));
    $response->assertRedirect('/login');
});

test("Unauthorized users can't access the user management page", function () {
    $user = User::factory()->create();
    $this->actingAs($user);
    $response = $this->get(route("master.user.index"));
    $response->assertStatus(403);
});

test("Unauthorized users can access the user management page. (with permissions)", function () {
    $permissions = [
        'user view-list',
        'user create',
        'user view-detail',
        'user update',
        'user delete',
    ];

    $role = Role::factory()->create(['name' => 'role']);
    $role->syncPermissions($permissions);
    $user = User::factory()->create();
    $user->syncRoles($role);

    $this->actingAs($user);
    $response = $this->get(route("master.user.index"));

    $response->assertStatus(200);
    $response->assertViewIs('master.user.index');
});

test("Authorized users can access the user management page", function () {
    $user = User::factory()->create();
    $role = Role::factory()->create(['name' => 'superuser']);
    $user->syncRoles($role);

    $this->actingAs($user);
    $response = $this->get(route("master.user.index"));
    $response->assertStatus(200);
    $response->assertViewIs('master.user.index');
});

test("Unauthenticated users cannot access the user create page", function () {
    $response = $this->get(route("master.user.create"));
    $response->assertRedirect('/login');
});

test("Unauthorized users can't access the user create page", function () {
    $user = User::factory()->create();
    $this->actingAs($user);
    $response = $this->get(route("master.user.create"));
    $response->assertStatus(403);
});

test("Unauthorized users can access the user create page. (with permissions)", function () {
    $permissions = [
        'user view-list',
        'user create',
        'user view-detail',
        'user update',
        'user delete',
    ];

    $role = Role::factory()->create(['name' => 'role']);
    $role->syncPermissions($permissions);
    $user = User::factory()->create();
    $user->syncRoles($role);

    $this->actingAs($user);
    $response = $this->get(route("master.user.create"));

    $response->assertStatus(200);
    $response->assertViewIs('master.user.create');
});

test("Authorized users can access the user create page", function () {
    $user = User::factory()->create();
    $role = Role::factory()->create(['name' => 'superuser']);
    $user->syncRoles($role);

    $this->actingAs($user);
    $response = $this->get(route("master.user.create"));
    $response->assertStatus(200);
    $response->assertViewIs('master.user.create');
});

test("Can't create new user data with invalid input", function () {
    $user = User::factory()->create();
    $role = Role::factory()->create(['name' => 'superuser']);
    $user->syncRoles($role);

    $this->actingAs($user);
    $response = $this->post(route("master.user.store"), [
        'name' => '',
        'email' => 'invalid-email',
        'password' => '123',
        'password_confirmation' => '1234',
    ]);

    $response->assertSessionHasErrors([
        'name',
        'email',
        'password',
    ]);
});

test("Can create new user data with valid input", function () {
    $user = User::factory()->create();
    $role = Role::factory()->create(['name' => 'superuser']);
    $user->syncRoles($role);

    $this->actingAs($user);
    $response = $this->post(route("master.user.store"), [
        'name' => 'Test User',
        'email' => 'test@mail.com',
        'password' => 'StrongP@ssword123',
        'password_confirmation' => 'StrongP@ssword123',
    ]);

    $response->assertSessionHasNoErrors();
    $response->assertRedirect(route("master.user.index"));

    $this->assertDatabaseHas('users', [
        'name' => 'Test User',
        'email' => 'test@mail.com'
    ]);
});

test("Unauthenticated users cannot access the user edit page", function () {
    $user = User::factory()->create();
    $response = $this->get(route("master.user.edit", $user));
    $response->assertRedirect('/login');
});

test("Unauthorized users can't access the user edit page", function () {
    $user = User::factory()->create();
    $this->actingAs($user);
    $response = $this->get(route("master.user.edit", $user));
    $response->assertStatus(403);
});

test("Unauthorized users can access the user edit page. (with permissions)", function () {
    $permissions = [
        'user view-list',
        'user create',
        'user view-detail',
        'user update',
        'user delete',
    ];

    $role = Role::factory()->create(['name' => 'role']);
    $role->syncPermissions($permissions);
    $user = User::factory()->create();
    $user->syncRoles($role);

    $this->actingAs($user);
    $response = $this->get(route("master.user.edit", $user));

    $response->assertStatus(200);
    $response->assertViewIs('master.user.edit');
});

test("Authorized users can access the user edit page", function () {
    $user = User::factory()->create();
    $role = Role::factory()->create(['name' => 'superuser']);
    $user->syncRoles($role);

    $this->actingAs($user);
    $response = $this->get(route("master.user.edit", $user));
    $response->assertStatus(200);
    $response->assertViewIs('master.user.edit');
});

test("Can't update user data with invalid input", function () {
    $user = User::factory()->create();
    $role = Role::factory()->create(['name' => 'superuser']);
    $user->syncRoles($role);

    $this->actingAs($user);
    $response = $this->put(route("master.user.update", $user), [
        'name' => '',
        'email' => 'invalid-email'
    ]);

    $response->assertSessionHasErrors([
        'name',
        'email',
    ]);
});

test("Can update user data with valid input", function () {
    $user = User::factory()->create();
    $role = Role::factory()->create(['name' => 'superuser']);
    $user->syncRoles($role);

    $this->actingAs($user);
    $response = $this->put(route("master.user.update", $user), [
        'name' => 'Test User',
        'email' => 'test@mail.com'
    ]);

    $response->assertSessionHasNoErrors();
    $response->assertRedirect(route("master.user.index"));
    $this->assertDatabaseHas('users', [
        'name' => 'Test User',
        'email' => 'test@mail.com'
    ]);
    $this->assertDatabaseMissing('users', [
        'name' => $user->name,
        'email' => $user->email
    ]);
});

test("Unauthenticated users cannot delete the user data", function () {
    $user = User::factory()->create();
    $response = $this->get(route("master.user.destroy", $user));
    $response->assertRedirect('/login');
});

test("Unauthorized users can't delete the user data", function () {
    $user = User::factory()->create();
    $this->actingAs($user);
    $response = $this->get(route("master.user.destroy", $user));
    $response->assertStatus(403);
});

test("Unauthorized users can delete the user data. (with permissions)", function () {
    $permissions = [
        'user view-list',
        'user create',
        'user view-detail',
        'user update',
        'user delete',
    ];

    $role = Role::factory()->create(['name' => 'role']);
    $role->syncPermissions($permissions);
    $user = User::factory()->create();
    $user->syncRoles($role);

    $this->actingAs($user);
    $response = $this->get(route("master.user.destroy", $user));

    $response->assertStatus(200);
});

test("Authorized users can delete the user data", function () {
    $user = User::factory()->create();
    $role = Role::factory()->create(['name' => 'superuser']);
    $user->syncRoles($role);

    $this->actingAs($user);
    $response = $this->get(route("master.user.destroy", $user));
    $response->assertStatus(200);
});

test("Can delete user data", function () {
    $user = User::factory()->create();
    $role = Role::factory()->create(['name' => 'superuser']);
    $user->syncRoles($role);

    $this->actingAs($user);
    $response = $this->delete(route("master.user.destroy", $user));

    $response->assertSessionHasNoErrors();
    $response->assertRedirect(route("master.user.index"));
    $this->assertDatabaseMissing('users', [
        'id' => $user->id,
        'name' => $user->name,
        'email' => $user->email
    ]);
});

test("Only user with role superuser can update password", function () {
    $user = User::factory()->create();
    $role = Role::factory()->create(['name' => 'superuser']);

    $this->actingAs($user);
    $response = $this->post(route("master.user.update-password", $user));
    $response->assertStatus(403);

    $user->syncRoles($role);
    $this->actingAs($user);
    $response = $this->post(route("master.user.update-password", $user), [
        'password' => 'StrongP@ssword123',
        'password_confirmation' => 'StrongP@ssword123',
    ]);

    $response->assertSessionHasNoErrors();
    $response->assertStatus(302);
    $response->assertRedirect(route("master.user.index"));
    $response->assertSessionHas('success', 'User password updated successfully.');
});

test("Can't update user password with invalid input", function () {
    $user = User::factory()->create();
    $role = Role::factory()->create(['name' => 'superuser']);
    $user->syncRoles($role);

    $this->actingAs($user);

    // Test too short password
    $response = $this->post(route("master.user.update-password", $user), [
        'password' => '1234567',
        'password_confirmation' => '1234567',
    ]);
    $response->assertSessionHasErrors(['password']);

    // Test missing uppercase letter
    $response = $this->post(route("master.user.update-password", $user), [
        'password' => 'password#xyz',
        'password_confirmation' => 'password#xyz',
    ]);
    $response->assertSessionHasErrors(['password']);

    // Test missing lowercase letter
    $response = $this->post(route("master.user.update-password", $user), [
        'password' => 'PASSWORD#XYZ',
        'password_confirmation' => 'PASSWORD#XYZ',
    ]);
    $response->assertSessionHasErrors(['password']);

    // Test missing number
    $response = $this->post(route("master.user.update-password", $user), [
        'password' => 'Password#xyz',
        'password_confirmation' => 'Password#xyz',
    ]);
    $response->assertSessionHasErrors(['password']);

    // Test missing special character
    $response = $this->post(route("master.user.update-password", $user), [
        'password' => 'Password123',
        'password_confirmation' => 'Password123',
    ]);
    $response->assertSessionHasErrors(['password']);

    // Test password confirmation mismatch
    $response = $this->post(route("master.user.update-password", $user), [
        'password' => 'StrongP@ssword123',
        'password_confirmation' => 'P4ssw)rd##234',
    ]);
    $response->assertSessionHasErrors(['password']);
});


test("Can update user password with valid input", function () {
    $user = User::factory()->create();
    $role = Role::factory()->create(['name' => 'superuser']);
    $user->syncRoles($role);

    $this->actingAs($user);
    $response = $this->post(route("master.user.update-password", $user), [
        'password' => 'StrongP@ssword123',
        'password_confirmation' => 'StrongP@ssword123',
    ]);

    $response->assertSessionHasNoErrors();
    $response->assertRedirect(route("master.user.index"));
});
