<?php

it('can render forgot password form', function () {
    $response = $this->get(route('forgot.password'));
    $response->assertStatus(200);
});

it('can send reset password link', function () {
    $user = \App\Models\User::factory()->create([
        'email_verified_at' => now(),
    ]);

    $response = $this->post(route('forgot.password.post'), [
        'email' => $user->email,
    ]);

    $response->assertSessionHas('success', 'We have emailed your password reset link!');
});

it('can send reset password link for unverified email', function () {
    $user = \App\Models\User::factory()->create([
        'email_verified_at' => null,
    ]);

    $response = $this->post(route('forgot.password.post'), [
        'email' => $user->email,
    ]);

    $response->assertSessionHas('success', 'We have emailed your password reset link!');
});

it('can send reset password link for invalid email', function () {
    $response = $this->post(route('forgot.password.post'), [
        'email' => 'unexistemail@mail.com',
    ]);

    $response->assertSessionHas('success', 'We have emailed your password reset link!');
});

it('can render the reset password form', function () {
    $resetPassword = \App\Models\ResetPassword::factory()->create();

    $response = $this->get(route('reset.password', ['token' => $resetPassword->token]));
    $response->assertStatus(200);
});

it('cannot render the reset password form with invalid token', function () {
    $response = $this->get(route('reset.password', ['token' => 'invalid-token']));
    $response->assertRedirect(route('login'))->assertSessionHas('error', 'Invalid token.');
});


it('can reset password', function () {
    $user = \App\Models\User::factory()->create([
        'email_verified_at' => now(),
    ]);
    $resetPassword = \App\Models\ResetPassword::factory()->create([
        'user_id' => $user->id,
    ]);

    $response = $this->post(route('reset.password.post'), [
        'token' => $resetPassword->token,
        'email' => $user->email,
        'password' => 'StrongP@ssword123',
        'password_confirmation' => 'StrongP@ssword123',
    ]);

    $response->assertRedirect(route('login'))->assertSessionHas('success', 'Your password has been reset successfully.');
});

it('can login with new password', function () {
    $user = \App\Models\User::factory()->create([
        'email_verified_at' => now(),
        'password' => bcrypt('StrongP@ssword123'),
    ]);
    $resetPassword = \App\Models\ResetPassword::factory()->create([
        'user_id' => $user->id,
    ]);

    $this->post(route('reset.password.post'), [
        'token' => $resetPassword->token,
        'email' => $user->email,
        'password' => 'NewP@ssword123',
        'password_confirmation' => 'NewP@ssword123',
    ]);

    $response = $this->post(route('login'), [
        'email' => $user->email,
        'password' => 'NewP@ssword123',
    ]);

    $response->assertRedirect(route('dashboard'));
    $this->assertAuthenticatedAs($user);
});
