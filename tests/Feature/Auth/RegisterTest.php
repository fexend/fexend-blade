<?php

it('can render register form', function () {
    $response = $this->get(route('register'));
    $response->assertStatus(200);
});

it('can register with valid data', function () {
    $response = $this->post(route('register.post'), [
        'name' => 'Test User',
        'email' => 'email@example.com',
        'password' => 'StrongP@ssword123',
        'password_confirmation' => 'StrongP@ssword123',
    ]);

    $response->assertRedirect(route('register'))->assertSessionHas('success', 'Account created successfully. Please check your email for verification link.');

    $this->assertDatabaseHas('users', [
        'email' => 'email@example.com',
        'email_verified_at' => null,
    ]);
});

it('cannot register with invalid data', function () {
    $response = $this->post(route('register.post'), [
        'name' => '',
        'email' => 'invalid-email',
        'password' => 'weak',
        'password_confirmation' => 'notmatching',
    ]);

    $response->assertSessionHasErrors([
        'name',
        'email',
        'password',
    ]);
});

it('cannot register with existing email', function () {
    $user = \App\Models\User::factory()->create([
        'email' => 'existing@maii.com',
        'email_verified_at' => null,
    ]);

    $response = $this->post(route('register.post'), [
        'name' => 'Test User',
        'email' => $user->email,
        'password' => 'StrongP@ssword123',
        'password_confirmation' => 'StrongP@ssword123',
    ]);

    $response->assertSessionHasErrors([
        'email',
    ]);
});

it('can verify email with valid token', function () {
    $user = \App\Models\User::factory()->create([
        'email_verified_at' => null,
    ]);
    $emailVerification = \App\Models\EmailVerification::factory()->create([
        'user_id' => $user->id,
    ]);

    $response = $this->get(route('verify.email', ['token' => $emailVerification->token]));

    $response->assertRedirect(route('login'))->assertSessionHas('success', 'Email verified successfully.');

    $this->assertDatabaseHas('users', [
        'id' => $user->id,
        'email_verified_at' => now(),
    ]);
});

it('cannot verify email with invalid token', function () {
    $response = $this->get(route('verify.email', ['token' => 'invalid-token']));
    $response->assertRedirect(route('register'))->assertSessionHas('error', 'Invalid email verification token.');
});

it('can render form for resending verification email', function () {
    $response = $this->get(route('resend.verification.email'));
    $response->assertStatus(200);
});

it('can resend verification email', function () {
    $user = \App\Models\User::factory()->create([
        'email_verified_at' => null,
    ]);

    $response = $this->post(route('resend.verification.email.post'), [
        'email' => $user->email,
    ]);

    $response->assertRedirect(route('register'))->assertSessionHas('success', 'A new verification email has been sent. Please check your inbox.');

    $this->assertDatabaseHas('email_verifications', [
        'user_id' => $user->id,
    ]);
});
