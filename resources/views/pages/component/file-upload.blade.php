<?php
use function Laravel\Folio\name;
name('component.file-upload');
?>

<x-main>
    <x-slot name="title">File Upload Component</x-slot>

    <x-breadcrumb>
        <x-breadcrumb-item :href="route('component.index')" title="Component"></x-breadcrumb-item>
        <x-breadcrumb-item title="File Upload" active></x-breadcrumb-item>
    </x-breadcrumb>

    <!-- Introduction -->
    <x-card class="mb-6">
        <x-slot name="header"><h2 class="card-title">File Upload Component</h2></x-slot>
        <p>The file upload component provides a drag-and-drop zone with file listing, progress bars, and individual remove buttons. It uses Alpine.js internally — no extra JS required.</p>
    </x-card>

    <!-- Drag & Drop Zone -->
    <x-card class="mb-6">
        <x-slot name="header"><h2 class="card-title">Drag & Drop Zone</h2></x-slot>
        <div class="mb-6 max-w-xl">
            <x-file-upload :multiple="true" accept=".png,.jpg,.jpeg,.pdf" />
        </div>
        <pre class="max-h-[300px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-file-upload :multiple="true" accept=".png,.jpg,.jpeg,.pdf" /&gt;
        </code></pre>
    </x-card>

    <!-- Compact Variant -->
    <x-card class="mb-6">
        <x-slot name="header"><h2 class="card-title">Compact (file-upload-sm)</h2></x-slot>
        <div class="mb-6 max-w-md">
            <x-file-upload size="sm" />
        </div>
        <pre class="max-h-[300px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;x-file-upload size="sm" /&gt;
        </code></pre>
    </x-card>

    <!-- Inside a Form -->
    <x-card class="mb-6">
        <x-slot name="header"><h2 class="card-title">Inside a Form</h2></x-slot>
        <div class="mb-6 max-w-xl">
            <form action="#" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <x-label for="attachments">Attachments</x-label>
                    <x-file-upload name="attachments[]" :multiple="true" />
                </div>
                <x-button type="submit" class="button-primary mt-4">Upload Files</x-button>
            </form>
        </div>
        <pre class="max-h-[300px] overflow-auto"><code class="language-blade whitespace-pre">
&lt;form action="{{ route('files.store') }}" method="POST" enctype="multipart/form-data"&gt;
    @csrf
    &lt;x-file-upload name="attachments[]" :multiple="true" /&gt;
    &lt;x-button type="submit" class="button-primary"&gt;Upload&lt;/x-button&gt;
&lt;/form&gt;
        </code></pre>
    </x-card>

    <!-- Props Table -->
    <x-card class="mb-4">
        <x-table title="File Upload Props">
            <x-slot name="thead">
                <tr><th>Prop</th><th>Type</th><th>Default</th><th>Description</th></tr>
            </x-slot>
            <x-slot name="tbody">
                <tr><td>size</td><td>string</td><td>''</td><td>'sm' for compact variant, empty for default</td></tr>
                <tr><td>multiple</td><td>boolean</td><td>false</td><td>Allow multiple file selection</td></tr>
                <tr><td>accept</td><td>string</td><td>null</td><td>MIME types or extensions (e.g. ".pdf,.jpg")</td></tr>
                <tr><td>description</td><td>string</td><td>'PNG, JPG, PDF up to 10MB each'</td><td>Helper text inside the dropzone</td></tr>
            </x-slot>
        </x-table>
    </x-card>

    <x-card>
        <x-slot name="header"><h2 class="card-title">Best Practices</h2></x-slot>
        <ul class="list-disc pl-6 space-y-2">
            <li>Always set <code>accept</code> to limit allowed file types and prevent user errors.</li>
            <li>Add server-side validation with <code>mimes</code> and <code>max</code> rules — the component only handles the UI.</li>
            <li>Use <code>enctype="multipart/form-data"</code> on the wrapping form.</li>
            <li>Use the <code>sm</code> variant in compact forms or sidebars where vertical space is limited.</li>
        </ul>
    </x-card>
</x-main>
