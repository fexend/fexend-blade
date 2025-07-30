<x-main :title="$title" isSidebarOpen="true">
    <x-breadcrumb>
        <x-breadcrumb-item :href="route('settings.index')" title="Settings"></x-breadcrumb-item>
        <x-breadcrumb-item :href="route('settings.permission.index')" title="Permission"></x-breadcrumb-item>
        <x-breadcrumb-item :href="route('settings.permission.edit', ['permission' => $permission])" title="Edit Permission" active></x-breadcrumb-item>
    </x-breadcrumb>

    <x-card title="Edit Permission" class="mb-6 w-full md:w-1/2">
        <form action="{{ route('settings.permission.update', ['permission' => $permission]) }}" method="post">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 gap-4 mb-6">
                <x-input id="name" name="name" label="Name" placeholder="Permission name" type="text" value="{{ old('name') ?? $permission->name }}" required />
                <x-input id="group_name" name="group" label="Group Name" placeholder="Group Name" type="text" value="{{ old('group') ?? $permission->group }}" required />
                <x-input id="guard_name" name="guard_name" label="Guard Name" placeholder="Guard Name" type="text" value="{{ old('guard_name') ?? $permission->guard_name }}" required />
            </div>
            <x-button class="button-primary" type="submit">Update Permission</x-button>
        </form>
    </x-card>
</x-main>
