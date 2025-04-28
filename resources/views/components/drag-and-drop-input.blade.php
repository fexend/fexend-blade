@props(['label' => 'Drag and drop your files here or browse files'])

<div x-data="dropZone()" class="form-group">
    <div @dragover.prevent="dragover = true" @dragleave.prevent="dragover = false" @drop.prevent="dropFile($event)" :class="{ 'border-primary dark:border-primary-dark': dragover }" class="border-2 border-dashed border-gray-300 dark:border-gray-600 rounded-lg p-8 text-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
        </svg>
        <p class="mt-2">{{ $label }}</p>
        <input type="file" {{ $attributes->except('label') }} class="hidden" @change="handleFileSelect($event)" id="dropzone-file" />
        <label for="dropzone-file" class="mt-2 inline-block cursor-pointer text-primary dark:text-primary-dark hover:underline">browse files</label>
        <template x-if="files.length > 0">
            <div class="mt-4">
                <template x-for="file in files" :key="file.name">
                    <div class="flex items-center justify-between gap-2 p-2 border rounded">
                        <span x-text="file.name"></span>
                        <button @click="removeFile(file)" class="text-red-500 hover:text-red-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                </template>
            </div>
        </template>
    </div>
</div>
