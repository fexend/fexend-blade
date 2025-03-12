<x-main title="Custom Dashboard">
    <div class="card">
        <div class="card-header">
            <h2>Hello World</h2>
        </div>
        <div class="card-body">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <x-input data-flatpickr="" name="ok" label='date' />
                <x-input data-flatpickr="year" name="ok" label='date' />
                <x-input data-flatpickr="time" name="ok" label='date' />
                <x-select name="name" label="select" class="form-select2 select2" data-select2="">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </x-select>
            </div>
        </div>
    </div>
</x-main>
