<x-main title="Custom Dashboard">
    <div class="card">
        <div class="card-header">
            <h2>Hello World</h2>
        </div>
        <div class="card-body">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <x-textarea name="textarea" placeholder="textarea...." label="Textarea" required></x-textarea>
                <x-select label="Select" required>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                </x-select>
            </div>
        </div>
    </div>
</x-main>
