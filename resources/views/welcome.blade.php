<x-main title="Custom Dashboard">
    <div class="card">
        <div class="card-header">
            <h2>Hello World</h2>
        </div>
        <div class="card-body">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <x-checkbox-input name="checkbox_basic" value="label_1">Label</x-checkbox-input>
                <x-checkbox-input name="checkbox_basic" value="label_2">Label</x-checkbox-input>
                <x-checkbox-input name="checkbox_basic" value="label_3" checked>Label</x-checkbox-input>
            </div>

            <div class="flex flex-col divide-y divide-gray-200 dark:divide-gray-700">
                <x-checkbox-input name="checkbox_divider" style="divider" id="checkbox-divider-1" value="label_1">
                    <h4>Label</h4>
                    <p>Variant</p>
                </x-checkbox-input>
                <x-checkbox-input name="checkbox_divider" style="divider" id="checkbox-divider-2" value="label_2">
                    <h4>Label</h4>
                    <p>Variant</p>
                </x-checkbox-input>
                <x-checkbox-input name="checkbox_divider" style="divider" id="checkbox-divider-3" value="label_3" checked>
                    <h4>Label</h4>
                    <p>Variant</p>
                </x-checkbox-input>
            </div>

            <div class="flex flex-col">
                <x-checkbox-input name="checkbox_card" style="card" variant="danger" id="checkbox-card-1" value="label_1">
                    <h4>Label</h4>
                    <p>Variant</p>
                </x-checkbox-input>
                <x-checkbox-input name="checkbox_card" style="card" variant="danger" id="checkbox-card-2" value="label_2">
                    <h4>Label</h4>
                    <p>Variant</p>
                </x-checkbox-input>
                <x-checkbox-input name="checkbox_card" style="card" variant="danger" id="checkbox-card-3" value="label_3" checked>
                    <h4>Label</h4>
                    <p>Variant</p>
                </x-checkbox-input>
            </div>
        </div>
    </div>
</x-main>
