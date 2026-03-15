@props([
    'id' => null,
    'label' => null,
    'toolbar' => 'full',
    'placeholder' => 'Write something...',
    'minHeight' => '200px',
    'name' => null,
])

@php
    $editorId = $id ?? 'quill-' . uniqid();
@endphp

<div class="form-group">
    @if ($label)
        <label class="label">{{ $label }}</label>
    @endif

    <div class="wysiwyg-container">
        <div id="{{ $editorId }}" class="wysiwyg-editor" style="min-height: {{ $minHeight }};">
            {{ $slot }}
        </div>
    </div>

    @if ($name)
        <input type="hidden" name="{{ $name }}" id="{{ $editorId }}-value">
    @endif
</div>

@push('scripts')
<script>
(function() {
    @if ($toolbar === 'full')
    var toolbarOptions = [
        [{ 'header': [1, 2, 3, false] }],
        ['bold', 'italic', 'underline', 'strike'],
        [{ 'color': [] }, { 'background': [] }],
        [{ 'list': 'ordered'}, { 'list': 'bullet' }],
        [{ 'align': [] }],
        ['link', 'image', 'blockquote', 'code-block'],
        ['clean']
    ];
    @else
    var toolbarOptions = [
        ['bold', 'italic', 'underline'],
        ['link'],
        ['clean']
    ];
    @endif

    var quill = new Quill('#{{ $editorId }}', {
        modules: { toolbar: toolbarOptions },
        theme: 'snow',
        placeholder: '{{ $placeholder }}'
    });

    @if ($name)
    quill.on('text-change', function() {
        document.getElementById('{{ $editorId }}-value').value = quill.root.innerHTML;
    });
    @endif
})();
</script>
@endpush
