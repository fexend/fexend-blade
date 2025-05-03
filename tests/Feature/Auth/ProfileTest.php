<?php

use Illuminate\Support\Facades\Hash;

test("Unauthenticated user cannot access profile page", function () {
    $response = $this->get(route('profile'));
    $response->assertRedirect(route('login'));
});

test('Authenticated user can view their profile', function () {
    $user = \App\Models\User::factory()->create();
    $this->actingAs($user);

    $response = $this->get(route('profile'));

    $response->assertStatus(200);
    $response->assertViewIs('auth.profile.index');
});

test('Authenticated user can update their profile', function () {
    $user = \App\Models\User::factory()->create();
    $this->actingAs($user);

    $response = $this->post(route('profile.update'), [
        'name' => 'New Name',
        'email' => 'email@mail.com',
    ]);

    $response->assertRedirect(route('profile'));
    $response->assertSessionHas('success', 'Profile updated successfully.');

    $this->assertDatabaseHas('users', [
        'id' => $user->id,
        'name' => 'New Name',
        'email' => 'email@mail.com',
    ]);
});

test("Cannot update the user information with invalid format", function () {
    $user = \App\Models\User::factory()->create();
    $this->actingAs($user);

    $response = $this->post(route('profile.update'), [
        'name' => '',
        'email' => 'invalid-email',
    ]);

    $response->assertSessionHasErrors(['name', 'email']);
});

test("Authenticated user can update their password", function () {
    $user = \App\Models\User::factory()->create();
    $this->actingAs($user);

    $response = $this->post(route('profile.password.post'), [
        'old_password' => 'password',
        'password' => 'newPassword123!',
        'password_confirmation' => 'newPassword123!',
    ]);

    $response->assertRedirect(route('profile'));
    $response->assertSessionHas('success', 'Password updated successfully.');
    $this->assertTrue(Hash::check('newPassword123!', $user->fresh()->password));
});

test("Cannot update the password with invalid format", function () {
    $user = \App\Models\User::factory()->create();
    $this->actingAs($user);

    $response = $this->post(route('profile.password.post'), [
        'old_password' => 'assword',
        'password' => 'short',
        'password_confirmation' => 'short',
    ]);

    $response->assertSessionHasErrors(['password']);
});
