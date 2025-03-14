<x-main title="Custom Dashboard">
    <div class="card">
        <div class="card-header">
            <h2>Hello World</h2>
        </div>
        <div class="card-body">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                {{-- <x-input type="file" name="ok" label='date' /> --}}
                {{-- <x-drag-and-drop-input /> --}}
                <x-radio-input name="label" value="label_1">Label</x-radio-input>
                <x-radio-input name="label" value="label_2">Label</x-radio-input>
                <x-radio-input name="label" value="label_3" checked>Label</x-radio-input>
            </div>
        </div>
    </div>
</x-main>
