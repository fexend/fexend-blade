<?php

use App\Models\User;

beforeEach(function () {
    $user = User::factory()->create();
    $this->actingAs($user);
});

it('can render the element page', function () {
    $response = $this->get(route("component.index"));
    $response->assertStatus(200);
});

it('can render the accordion page', function () {
    $response = $this->get(route("component.accordion"));
    $response->assertStatus(200);
});

it('can render the alert page', function () {
    $response = $this->get(route("component.alert"));
    $response->assertStatus(200);
});

it('can render the badge page', function () {
    $response = $this->get(route("component.badge"));
    $response->assertStatus(200);
});

it('can render the breadcrumb page', function () {
    $response = $this->get(route("component.breadcrumb"));
    $response->assertStatus(200);
});

it('can render the card page', function () {
    $response = $this->get(route("component.card"));
    $response->assertStatus(200);
});

it('can render the collapse page', function () {
    $response = $this->get(route("component.collapse"));
    $response->assertStatus(200);
});

it('can render the divider page', function () {
    $response = $this->get(route("component.divider"));
    $response->assertStatus(200);
});

it('can render the drawer page', function () {
    $response = $this->get(route("component.drawer"));
    $response->assertStatus(200);
});

it('can render the dropdown page', function () {
    $response = $this->get(route("component.dropdown"));
    $response->assertStatus(200);
});

it('can render the menu list page', function () {
    $response = $this->get(route("component.menu-list"));
    $response->assertStatus(200);
});

it('can render the modal page', function () {
    $response = $this->get(route("component.modal"));
    $response->assertStatus(200);
});

it('can render the popover page', function () {
    $response = $this->get(route("component.popover"));
    $response->assertStatus(200);
});

it('can render the tab page', function () {
    $response = $this->get(route("component.tab"));
    $response->assertStatus(200);
});

it('can render the table page', function () {
    $response = $this->get(route("component.table"));
    $response->assertStatus(200);
});

it('can render the toast page', function () {
    $response = $this->get(route("component.toast"));
    $response->assertStatus(200);
});

it('can render the tooltip page', function () {
    $response = $this->get(route("component.tooltip"));
    $response->assertStatus(200);
});
