<?php

use App\Models\User;

beforeEach(function () {
    $user = User::factory()->create();
    $this->actingAs($user);
});

test("can render the pages", function () {
    $response = $this->get(route("pages.index"));
    $response->assertStatus(200);
});

test("can render the login page", function () {
    $response = $this->get(route("pages.login"));
    $response->assertStatus(200);
});

test("can render the register page", function () {
    $response = $this->get(route("pages.register"));
    $response->assertStatus(200);
});

test("can render the forgot password ", function () {
    $response = $this->get(route("pages.forgot-password"));
    $response->assertStatus(200);
});

test("can render the reset password page", function () {
    $response = $this->get(route("pages.reset-password"));
    $response->assertStatus(200);
});

test("can render the resend verification email", function () {
    $response = $this->get(route("pages.resend-verification-email"));
    $response->assertStatus(200);
});

test("can render the layout 1", function () {
    $response = $this->get(route("pages.layouts-1"));
    $response->assertStatus(200);
});

test("can render the layout 2", function () {
    $response = $this->get(route("pages.layouts-2"));
    $response->assertStatus(200);
});

test("can render the layout 3", function () {
    $response = $this->get(route("pages.layouts-3"));
    $response->assertStatus(200);
});
