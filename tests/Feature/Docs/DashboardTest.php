<?php

use App\Models\User;

beforeEach(function () {
    $this->user = User::factory()->create();
    $this->actingAs($this->user);
});

test("can render the dashboard page", function () {
    $response = $this->get(route('dashboard'));

    $response->assertStatus(200);
});

test('can render the dashboard 2 page', function () {
    $response = $this->get(route('dashboard.dashboard-2'));

    $response->assertStatus(200);
});

test('can render the dashboard 3 page', function () {
    $response = $this->get(route('dashboard.dashboard-3'));

    $response->assertStatus(200);
});
