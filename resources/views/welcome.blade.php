<x-main title="Custom Dashboard">
    <div class="card">
        <div class="card-header">
            <h2>Hello World</h2>
        </div>
        <div class="card-body">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <x-switch-input name="switch_basic" value="label_1">Label</x-switch-input>
                <x-switch-input name="switch_basic" variant="danger" value="label_2">Label</x-switch-input>
            </div>
        </div>
    </div>
</x-main>
