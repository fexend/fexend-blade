<?php
use function Laravel\Folio\name;
name('component.avatar');
?>

<x-main>
    <x-slot name="title">Avatar Component</x-slot>

    <x-breadcrumb>
        <x-breadcrumb-item :href="route('component.index')" title="Component"></x-breadcrumb-item>
        <x-breadcrumb-item title="Avatar" active></x-breadcrumb-item>
    </x-breadcrumb>

    <!-- Introduction -->
    <x-card class="mb-6">
        <x-slot name="header"><h2 class="card-title">Avatar Component</h2></x-slot>
        <p>The avatar component displays user initials, images, or placeholder icons with optional status badges and group stacking.</p>
    </x-card>

    <!-- Sizes -->
    <x-card class="mb-6">
        <x-slot name="header"><h2 class="card-title">Sizes</h2></x-slot>
        <div class="mb-6 flex flex-wrap items-end gap-4">
            <x-avatar size="xs">XS</x-avatar>
            <x-avatar size="sm">SM</x-avatar>
            <x-avatar>MD</x-avatar>
            <x-avatar size="lg">LG</x-avatar>
            <x-avatar size="xl">XL</x-avatar>
        </div>
        <pre class="max-h-[300px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-avatar size="xs"&gt;XS&lt;/x-avatar&gt;
&lt;x-avatar size="sm"&gt;SM&lt;/x-avatar&gt;
&lt;x-avatar&gt;MD&lt;/x-avatar&gt;
&lt;x-avatar size="lg"&gt;LG&lt;/x-avatar&gt;
&lt;x-avatar size="xl"&gt;XL&lt;/x-avatar&gt;
        </code></pre>
    </x-card>

    <!-- Color Variants -->
    <x-card class="mb-6">
        <x-slot name="header"><h2 class="card-title">Color Variants</h2></x-slot>
        <div class="mb-6 flex flex-wrap gap-4">
            <x-avatar color="primary">PR</x-avatar>
            <x-avatar color="secondary">SE</x-avatar>
            <x-avatar color="success">SC</x-avatar>
            <x-avatar color="danger">DN</x-avatar>
            <x-avatar color="warning">WN</x-avatar>
            <x-avatar color="info">IF</x-avatar>
        </div>
        <pre class="max-h-[300px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-avatar color="primary"&gt;PR&lt;/x-avatar&gt;
&lt;x-avatar color="secondary"&gt;SE&lt;/x-avatar&gt;
&lt;x-avatar color="success"&gt;SC&lt;/x-avatar&gt;
&lt;x-avatar color="danger"&gt;DN&lt;/x-avatar&gt;
&lt;x-avatar color="warning"&gt;WN&lt;/x-avatar&gt;
&lt;x-avatar color="info"&gt;IF&lt;/x-avatar&gt;
        </code></pre>
    </x-card>

    <!-- Square -->
    <x-card class="mb-6">
        <x-slot name="header"><h2 class="card-title">Square</h2></x-slot>
        <div class="mb-6 flex flex-wrap items-end gap-4">
            <x-avatar size="xs" :square="true">XS</x-avatar>
            <x-avatar size="sm" :square="true">SM</x-avatar>
            <x-avatar :square="true">MD</x-avatar>
            <x-avatar size="lg" :square="true">LG</x-avatar>
            <x-avatar size="xl" :square="true">XL</x-avatar>
        </div>
        <pre class="max-h-[300px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-avatar size="lg" :square="true"&gt;LG&lt;/x-avatar&gt;
        </code></pre>
    </x-card>

    <!-- With Status Badge -->
    <x-card class="mb-6">
        <x-slot name="header"><h2 class="card-title">With Status Badge</h2></x-slot>
        <div class="mb-6 flex flex-wrap gap-6">
            <x-avatar color="primary" status="online">JD</x-avatar>
            <x-avatar color="secondary" status="busy">KL</x-avatar>
            <x-avatar color="warning" status="away">MN</x-avatar>
            <x-avatar status="offline">RS</x-avatar>
        </div>
        <pre class="max-h-[300px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-avatar color="primary" status="online"&gt;JD&lt;/x-avatar&gt;
&lt;x-avatar color="secondary" status="busy"&gt;KL&lt;/x-avatar&gt;
&lt;x-avatar color="warning" status="away"&gt;MN&lt;/x-avatar&gt;
&lt;x-avatar status="offline"&gt;RS&lt;/x-avatar&gt;
        </code></pre>
    </x-card>

    <!-- Image Avatar -->
    <x-card class="mb-6">
        <x-slot name="header"><h2 class="card-title">Image Avatar</h2></x-slot>
        <div class="mb-6 flex flex-wrap gap-4">
            <x-avatar image="https://ui-avatars.com/api/?name=John+Doe&background=615fff&color=fff" alt="John Doe" size="lg"></x-avatar>
            <x-avatar image="https://ui-avatars.com/api/?name=Jane+Smith&background=9333ea&color=fff" alt="Jane Smith" size="lg" status="online"></x-avatar>
        </div>
        <pre class="max-h-[300px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-avatar image="{{ $user->avatar }}" alt="{{ $user->name }}" size="lg" status="online"&gt;&lt;/x-avatar&gt;
        </code></pre>
    </x-card>

    <!-- Stacked Group -->
    <x-card class="mb-6">
        <x-slot name="header"><h2 class="card-title">Stacked Group</h2></x-slot>
        <div class="mb-6 flex flex-wrap gap-8 items-center">
            <div class="avatar-group">
                <x-avatar color="primary">JD</x-avatar>
                <x-avatar color="success">KL</x-avatar>
                <x-avatar color="danger">MN</x-avatar>
                <x-avatar color="warning">PQ</x-avatar>
                <span class="avatar-group-count">+3</span>
            </div>
        </div>
        <pre class="max-h-[300px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;div class="avatar-group"&gt;
    &lt;x-avatar color="primary"&gt;JD&lt;/x-avatar&gt;
    &lt;x-avatar color="success"&gt;KL&lt;/x-avatar&gt;
    &lt;x-avatar color="danger"&gt;MN&lt;/x-avatar&gt;
    &lt;span class="avatar-group-count"&gt;+3&lt;/span&gt;
&lt;/div&gt;
        </code></pre>
    </x-card>

    <!-- Props Table -->
    <x-card class="mb-4">
        <x-table title="Avatar Props">
            <x-slot name="thead">
                <tr><th>Prop</th><th>Type</th><th>Default</th><th>Description</th></tr>
            </x-slot>
            <x-slot name="tbody">
                <tr><td>size</td><td>string</td><td>''</td><td>xs, sm, lg, xl (empty = md)</td></tr>
                <tr><td>color</td><td>string</td><td>''</td><td>primary, secondary, success, danger, warning, info</td></tr>
                <tr><td>square</td><td>boolean</td><td>false</td><td>Render as a square instead of circle</td></tr>
                <tr><td>image</td><td>string</td><td>null</td><td>Image URL — renders an &lt;img&gt; tag</td></tr>
                <tr><td>alt</td><td>string</td><td>''</td><td>Alt text for image avatar</td></tr>
                <tr><td>status</td><td>string</td><td>null</td><td>online, busy, away, offline</td></tr>
            </x-slot>
        </x-table>
    </x-card>

    <!-- Best Practices -->
    <x-card>
        <x-slot name="header"><h2 class="card-title">Best Practices</h2></x-slot>
        <ul class="list-disc pl-6 space-y-2">
            <li>Use initials (2 chars max) when no image is available.</li>
            <li>Match avatar color to the user's role or team for visual grouping.</li>
            <li>Always provide <code>alt</code> text for image avatars for accessibility.</li>
            <li>Use the <code>avatar-group</code> wrapper with a count badge when stacking more than 4.</li>
        </ul>
    </x-card>
</x-main>
