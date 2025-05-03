<?php

use App\Models\User;

it("Can render login form", function () {
    $response = $this->get(route("login"));
    $response->assertStatus(200);
});

it("can unauthorized user redirect to login form", function () {
    $response = $this->get(route("dashboard"));
    $response->assertRedirect(route("login"));
});

it("can login with valid credentials", function () {
    $user = User::factory()->create([
        'password' => bcrypt('password'),
    ]);

    $response = $this->post(route("login"), [
        'email' => $user->email,
        'password' => 'password',
    ]);

    $response->assertRedirect(route("dashboard"));
    $this->assertAuthenticatedAs($user);
});

it("can login with invalid credentials", function () {
    $user = User::factory()->create([
        'password' => bcrypt('password'),
    ]);

    $response = $this->post(route("login"), [
        'email' => $user->email,
        'password' => 'wrong-password',
    ]);

    $response->assertSessionHasErrors(['email']);
    $this->assertGuest();
});

it('cannot login with unverified email', function () {
    $user = User::factory()->create([
        'email_verified_at' => null,
        'password' => bcrypt('password'),
    ]);

    $response = $this->post(route("login"), [
        'email' => $user->email,
        'password' => 'password',
    ]);

    $response->assertSessionHasErrors(['email']);
    $this->assertGuest();
});

it('can login with verified email', function () {
    $user = User::factory()->create([
        'email_verified_at' => now(),
        'password' => bcrypt('password'),
    ]);

    $response = $this->post(route("login"), [
        'email' => $user->email,
        'password' => 'password',
    ]);

    $response->assertRedirect(route("dashboard"));
    $this->assertAuthenticatedAs($user);
});

it("can login with remember me", function () {
    $user = User::factory()->create([
        'password' => bcrypt('password'),
    ]);

    $response = $this->post(route("login"), [
        'email' => $user->email,
        'password' => 'password',
        'remember' => true,
    ]);

    $response->assertRedirect(route("dashboard"));
    $this->assertAuthenticatedAs($user);
});



it("can logout", function () {
    $user = User::factory()->create([
        'password' => bcrypt('password'),
    ]);

    $this->actingAs($user);

    $response = $this->post(route("logout"));

    $response->assertRedirect(route("login"));
    $this->assertGuest();
});
