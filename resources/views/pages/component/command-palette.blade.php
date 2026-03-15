<?php
use function Laravel\Folio\name;
name('component.command-palette');
?>

<x-main>
    <x-slot name="title">Command Palette Component</x-slot>

    <x-breadcrumb>
        <x-breadcrumb-item :href="route('component.index')" title="Component"></x-breadcrumb-item>
        <x-breadcrumb-item title="Command Palette" active></x-breadcrumb-item>
    </x-breadcrumb>

    <!-- Introduction -->
    <x-card class="mb-6">
        <x-slot name="header"><h2 class="card-title">Command Palette Component</h2></x-slot>
        <p>The command palette provides a keyboard-accessible overlay for quick navigation and actions. Triggered by a button or <kbd>⌘K</kbd> / <kbd>Ctrl+K</kbd>.</p>
    </x-card>

    <!-- Full Overlay Demo -->
    <x-card class="mb-6">
        <x-slot name="header"><h2 class="card-title">Full Overlay Demo</h2></x-slot>
        <div class="mb-6">
            <x-command-palette
                triggerText="Open Command Palette"
                :commands="[
                    ['group' => 'Navigation', 'items' => [
                        ['icon' => 'M3 12l9-9 9 9M5 10v10h4v-6h6v6h4V10', 'label' => 'Dashboard', 'shortcut' => 'G H'],
                        ['icon' => 'M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z', 'label' => 'Profile', 'shortcut' => 'G P'],
                        ['icon' => 'M10.325 4.317c.426-1.756 2.924-1.756 3.35 0', 'label' => 'Settings', 'shortcut' => 'G S'],
                    ]],
                    ['group' => 'Actions', 'items' => [
                        ['icon' => 'M12 4v16m8-8H4', 'label' => 'New Document', 'shortcut' => 'N'],
                        ['icon' => 'M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12', 'label' => 'Upload File', 'shortcut' => 'U'],
                    ]],
                ]"
            />
        </div>
        <pre class="max-h-[300px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-command-palette
    triggerText="Open Command Palette"
    :commands="[
        ['group' => 'Navigation', 'items' => [
            ['icon' => '...svg path...', 'label' => 'Dashboard', 'shortcut' => 'G H'],
            ['icon' => '...svg path...', 'label' => 'Profile', 'shortcut' => 'G P'],
        ]],
        ['group' => 'Actions', 'items' => [
            ['icon' => '...svg path...', 'label' => 'New Document', 'shortcut' => 'N'],
        ]],
    ]"
/&gt;
        </code></pre>
    </x-card>

    <!-- Custom Trigger -->
    <x-card class="mb-6">
        <x-slot name="header"><h2 class="card-title">Custom Trigger</h2></x-slot>
        <div class="mb-6">
            <x-command-palette triggerText="Search everything..." triggerClass="button button-dark-outline flex items-center gap-2 w-72 justify-between">
                <x-slot name="trigger">
                    <button class="button button-dark-outline flex items-center gap-2 w-72 justify-between">
                        <span class="flex items-center gap-2 text-slate-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                            Search everything...
                        </span>
                        <span class="command-palette-shortcut text-xs">⌘K</span>
                    </button>
                </x-slot>
            </x-command-palette>
        </div>
        <pre class="max-h-[300px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-command-palette&gt;
    &lt;x-slot name="trigger"&gt;
        &lt;button class="button button-dark-outline"&gt;
            Search... &lt;span class="command-palette-shortcut"&gt;⌘K&lt;/span&gt;
        &lt;/button&gt;
    &lt;/x-slot&gt;
&lt;/x-command-palette&gt;
        </code></pre>
    </x-card>

    <!-- Props Table -->
    <x-card class="mb-4">
        <x-table title="Command Palette Props">
            <x-slot name="thead">
                <tr><th>Prop</th><th>Type</th><th>Default</th><th>Description</th></tr>
            </x-slot>
            <x-slot name="tbody">
                <tr><td>triggerText</td><td>string</td><td>'Open Command Palette'</td><td>Default trigger button label</td></tr>
                <tr><td>triggerClass</td><td>string</td><td>'button button-primary'</td><td>CSS class for the trigger button</td></tr>
                <tr><td>commands</td><td>array</td><td>[]</td><td>Array of <code>[group, items[]]</code> — each item has <code>icon</code>, <code>label</code>, <code>shortcut</code></td></tr>
                <tr><td>showShortcut</td><td>boolean</td><td>true</td><td>Shows the ⌘K badge next to the trigger</td></tr>
                <tr><td>trigger</td><td>slot</td><td>—</td><td>Replace the default trigger with custom markup</td></tr>
            </x-slot>
        </x-table>
    </x-card>

    <x-card>
        <x-slot name="header"><h2 class="card-title">Best Practices</h2></x-slot>
        <ul class="list-disc pl-6 space-y-2">
            <li>Register the <kbd>⌘K</kbd> / <kbd>Ctrl+K</kbd> shortcut so power users can open it without mouse.</li>
            <li>Group commands logically (Navigation, Actions, Settings) to reduce cognitive load.</li>
            <li>Show keyboard shortcuts for the most common actions to help users learn them.</li>
        </ul>
    </x-card>
</x-main>
