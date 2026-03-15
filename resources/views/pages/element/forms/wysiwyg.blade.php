<?php
use function Laravel\Folio\name;
name('element.forms.wysiwyg');
?>

<x-main>
    <x-slot name="title">WYSIWYG Editor Element</x-slot>

    <x-breadcrumb>
        <x-breadcrumb-item :href="route('element.index')" title="Element"></x-breadcrumb-item>
        <x-breadcrumb-item title="WYSIWYG Editor" active></x-breadcrumb-item>
    </x-breadcrumb>

    <!-- Introduction -->
    <x-card class="mb-6">
        <x-slot name="header"><h2 class="card-title">WYSIWYG Editor Element</h2></x-slot>
        <p>The <code>&lt;x-wysiwyg&gt;</code> component wraps a Quill editor. Provide a <code>name</code> prop to sync the HTML content into a hidden input for form submission.</p>
    </x-card>

    <!-- Full Toolbar -->
    <x-card class="mb-6">
        <x-slot name="header"><h2 class="card-title">Full Toolbar (Quill)</h2></x-slot>
        <div class="mb-6 max-w-3xl">
            <x-wysiwyg label="Content Editor" toolbar="full" placeholder="Write something amazing..." name="content">
                <p>Start typing your content here. This is a <strong>rich text editor</strong> powered by Quill.</p>
            </x-wysiwyg>
        </div>
        <pre class="max-h-[300px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-wysiwyg label="Content Editor" toolbar="full" name="content"&gt;
    &lt;p&gt;Optional initial content here.&lt;/p&gt;
&lt;/x-wysiwyg&gt;
        </code></pre>
    </x-card>

    <!-- Minimal Toolbar -->
    <x-card class="mb-6">
        <x-slot name="header"><h2 class="card-title">Minimal Toolbar</h2></x-slot>
        <div class="mb-6 max-w-2xl">
            <x-wysiwyg label="Comment Box" toolbar="minimal" placeholder="Write a comment..." minHeight="120px" name="comment" />
        </div>
        <pre class="max-h-[300px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-wysiwyg label="Comment Box" toolbar="minimal" minHeight="120px" name="comment" /&gt;
        </code></pre>
    </x-card>

    <!-- Inside a Form -->
    <x-card class="mb-6">
        <x-slot name="header"><h2 class="card-title">Inside a Form</h2></x-slot>
        <pre class="max-h-[300px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;form action="{{ route('articles.store') }}" method="POST"&gt;
    @csrf
    &lt;div class="form-group"&gt;
        &lt;x-input label="Title" name="title" :value="old('title')" /&gt;
    &lt;/div&gt;
    &lt;x-wysiwyg label="Body" toolbar="full" name="body"&gt;{{ old('body') }}&lt;/x-wysiwyg&gt;
    &lt;x-button type="submit" class="button-primary mt-4"&gt;Publish&lt;/x-button&gt;
&lt;/form&gt;

{{-- In your controller: --}}
$validated = $request->validate(['title' => 'required', 'body' => 'required|string']);
        </code></pre>
    </x-card>

    <!-- Props Table -->
    <x-card class="mb-4">
        <x-table title="WYSIWYG Props">
            <x-slot name="thead">
                <tr><th>Prop</th><th>Type</th><th>Default</th><th>Description</th></tr>
            </x-slot>
            <x-slot name="tbody">
                <tr><td>id</td><td>string</td><td>auto-generated</td><td>ID for the Quill container element</td></tr>
                <tr><td>label</td><td>string</td><td>null</td><td>Label above the editor</td></tr>
                <tr><td>toolbar</td><td>string</td><td>'full'</td><td>'full' or 'minimal'</td></tr>
                <tr><td>placeholder</td><td>string</td><td>'Write something...'</td><td>Quill editor placeholder</td></tr>
                <tr><td>minHeight</td><td>string</td><td>'200px'</td><td>Minimum height of the editor area</td></tr>
                <tr><td>name</td><td>string</td><td>null</td><td>When set, syncs HTML to a hidden input for form submission</td></tr>
                <tr><td>default slot</td><td>HTML</td><td>—</td><td>Initial HTML content pre-loaded into the editor</td></tr>
            </x-slot>
        </x-table>
    </x-card>

    <x-card>
        <x-slot name="header"><h2 class="card-title">Best Practices</h2></x-slot>
        <ul class="list-disc pl-6 space-y-2">
            <li>Always sanitize HTML on the server (e.g. with <code>HTMLPurifier</code> or <code>strip_tags</code>) — Quill output is raw HTML.</li>
            <li>Use <code>toolbar="minimal"</code> for comment boxes and short-form inputs; save full toolbars for article/post editors.</li>
            <li>The <code>name</code> prop enables a hidden input that is updated on <code>text-change</code> — works with standard Laravel <code>$request->input()</code>.</li>
            <li>Include Quill CDN in your layout's <code>@stack('scripts')</code>: <code>https://cdn.quilljs.com/1.3.6/quill.snow.js</code>.</li>
        </ul>
    </x-card>
</x-main>
