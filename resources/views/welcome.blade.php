<x-main title="Custom Dashboard">
    <div class="card">
        <div class="card-header">
            <h2>Hello World</h2>
        </div>
        <div class="card-body">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <x-radio-input name="radio_basic" value="label_1">Label</x-radio-input>
                <x-radio-input name="radio_basic" value="label_2">Label</x-radio-input>
                <x-radio-input name="radio_basic" value="label_3" checked>Label</x-radio-input>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <x-radio-input style="button" name="radio_button" variant="success" value="label_1" id="label_1">Label</x-radio-input>
                <x-radio-input style="button" name="radio_button" variant="success" value="label_2" id="label_2">Label</x-radio-input>
                <x-radio-input style="button" name="radio_button" variant="success" value="label_3" id="label_3">Label</x-radio-input>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <x-radio-input style="card" name="radio_card" value="label_1" id="label_1_card">
                    <p>Radio</p>
                    <p>sub</p>
                </x-radio-input>
                <x-radio-input style="card" name="radio_card" value="label_2" id="label_2_card">
                    <p>Radio</p>
                    <p>sub</p>
                </x-radio-input>
                <x-radio-input style="card" name="radio_card" value="label_3" id="label_3_card">
                    <p>Radio</p>
                    <p>sub</p>
                </x-radio-input>
            </div>
        </div>
    </div>
</x-main>
