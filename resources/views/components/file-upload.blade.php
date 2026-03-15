@props([
    'size' => '',
    'multiple' => false,
    'accept' => null,
    'description' => 'PNG, JPG, PDF up to 10MB each',
])

@php
    $classes = 'file-upload';
    if ($size === 'sm') $classes .= ' file-upload-sm';
@endphp

<div x-data="{
    dragging: false,
    files: [],
    handleDrop(e) {
        this.dragging = false;
        const dropped = Array.from(e.dataTransfer.files);
        dropped.forEach(f => this.files.push({name: f.name, size: (f.size/1024).toFixed(1) + ' KB', progress: 100}));
    },
    handleSelect(e) {
        Array.from(e.target.files).forEach(f => this.files.push({name: f.name, size: (f.size/1024).toFixed(1) + ' KB', progress: 100}));
    },
    removeFile(i) { this.files.splice(i, 1); }
}">
    <div class="{{ $classes }}" :class="{dragging: dragging}"
        @dragover.prevent="dragging = true"
        @dragleave.prevent="dragging = false"
        @drop.prevent="handleDrop($event)"
    >
        <input type="file" {{ $multiple ? 'multiple' : '' }} {{ $accept ? "accept={$accept}" : '' }} @change="handleSelect($event)" {{ $attributes->except(['size', 'multiple', 'accept', 'description']) }} aria-label="Upload files">
        <svg xmlns="http://www.w3.org/2000/svg" class="file-upload-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"/></svg>
        <div class="file-upload-title">Drop files here or <span class="file-upload-browse">browse</span></div>
        @if ($size !== 'sm')
            <div class="file-upload-description">{{ $description }}</div>
        @endif
    </div>

    @if ($size !== 'sm')
        <div class="file-upload-list" x-show="files.length > 0">
            <template x-for="(file, i) in files" :key="i">
                <div class="file-upload-item">
                    <div class="file-upload-item-info">
                        <div class="file-upload-item-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                        </div>
                        <div>
                            <div class="file-upload-item-name" x-text="file.name"></div>
                            <div class="file-upload-item-size" x-text="file.size"></div>
                            <div class="file-upload-progress"><div class="file-upload-progress-bar" :style="{width: file.progress + '%'}"></div></div>
                        </div>
                    </div>
                    <button class="file-upload-item-remove" @click="removeFile(i)" aria-label="Remove file">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
                    </button>
                </div>
            </template>
        </div>
    @endif
</div>
