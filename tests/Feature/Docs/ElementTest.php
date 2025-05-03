<?php

use App\Models\User;

beforeEach(function () {
    $user = User::factory()->create();
    $this->actingAs($user);
});

it('can render the element page', function () {
    $response = $this->get(route("element.index"));
    $response->assertStatus(200);;
});

it('can render the button element page', function () {
    $response = $this->get(route("element.button"));
    $response->assertStatus(200);;
});

it('can render the input element page', function () {
    $response = $this->get(route("element.forms.input"));
    $response->assertStatus(200);
});

it('can render the checkbox element page', function () {
    $response = $this->get(route("element.forms.checkbox"));
    $response->assertStatus(200);
});

it('can render the textarea element page', function () {
    $response = $this->get(route("element.forms.textarea"));
    $response->assertStatus(200);
});

it('can render the select element page', function () {
    $response = $this->get(route("element.forms.select"));
    $response->assertStatus(200);
});

it('can render the input date element page', function () {
    $response = $this->get(route("element.forms.input-date"));
    $response->assertStatus(200);
});

it('can render the input file element page', function () {
    $response = $this->get(route("element.forms.input-file"));
    $response->assertStatus(200);
});

it('can render the input radio element page', function () {
    $response = $this->get(route("element.forms.input-radio"));
    $response->assertStatus(200);
});
