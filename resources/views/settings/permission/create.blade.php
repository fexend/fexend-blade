<x-main :title="$title" isSidebarOpen="true">
    <x-breadcrumb>
        <x-breadcrumb-item :href="route('settings.index')" title="Settings"></x-breadcrumb-item>
        <x-breadcrumb-item :href="route('settings.permission.index')" title="Permission"></x-breadcrumb-item>
        <x-breadcrumb-item :href="route('settings.permission.create')" title="Create Permission" active></x-breadcrumb-item>
    </x-breadcrumb>

    <x-card title="Create Permission" class="mb-6">
        <form action="{{ route('settings.permission.store') }}" method="post" x-data="{ names: [''] }">
            @csrf

            <div class="grid grid-cols-1 mb-6">
                <x-input id="name" name="group" label="Permission Group" placeholder="Permission Group" type="text" required />
                <x-input id="guard_name" name="guard_name" label="Guard Name" placeholder="Guard Name" type="text" required />
            </div>

            <x-divider text="Permission Names" />

            <div class="mb-4">
                <x-button class="button-primary-soft mb-4 ml-auto flex" type="button" @click="names.push('')">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg> Add Name
                </x-button>

                <x-table title="">
                    <x-slot name="thead">
                        <tr>
                            <th class="w-10/12">Name</th>
                            <th>#</th>
                        </tr>
                    </x-slot>

                    <x-slot name="tbody">

                        <template x-for="(name, idx) in names" :key="idx">
                            <tr>
                                <td><x-input :name="'name[]'" type="text" placeholder="Name" x-model="names[idx]" required /></td>
                                <td>
                                    <x-button class="button-danger-soft ml-2" type="button" @click="names.splice(idx, 1)" x-show="names.length > 1">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </x-button>
                                </td>
                            </tr>
                        </template>
                    </x-slot>
                </x-table>
            </div>

            <x-button class="button-primary" type="submit">Create Permission</x-button>
        </form>
    </x-card>
</x-main>
