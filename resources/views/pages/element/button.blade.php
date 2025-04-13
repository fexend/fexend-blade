<x-layouts.master title="Button">
    <h1 class="text-2xl font-bold mb-4">Button Component</h1>

    <p class="mb-4">
        Buttons are used to trigger actions or events in your application.
    </p>

    <h2 class="text-xl font-semibold mt-6 mb-3">Basic Usage</h2>
    <div class="demo-content space-x-2">
        <x-button>Default Button</x-button>
        <x-button type="primary">Primary Button</x-button>
        <x-button type="secondary">Secondary Button</x-button>
    </div>

    <h2 class="text-xl font-semibold mt-6 mb-3">Button Events</h2>
    <div class="demo-content space-x-2">
        <x-button @click="alert('Button clicked!')">Click Me</x-button>
        <x-button @click="$dispatch('open-drawer', { id: 'example-drawer' })">
            Open Drawer
        </x-button>
    </div>
</x-layouts.master>
