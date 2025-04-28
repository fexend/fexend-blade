<?php

use App\Models\User;

it("un authenticated user redirect to login page", function () {
    $response = $this->get(route("dashboard"));
    $response->assertRedirect(route("login"));
});

it("authenticated user can access dashboard", function () {
    $user = User::factory()->create();
    $this->actingAs($user);

    $response = $this->get(route("dashboard"));
    $response->assertStatus(200);
});
