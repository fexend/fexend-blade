<x-main :title="$title" isSidebarOpen="true">
    <x-breadcrumb>
        <x-breadcrumb-item :href="route('settings.index')" title="Settings"></x-breadcrumb-item>
        <x-breadcrumb-item title="Role" active></x-breadcrumb-item>
    </x-breadcrumb>
    <x-table datatable id="roles-table">

        <x-slot name="actions">
            <a href="{{ route('settings.role.create') }}" class="button button-primary">Create Role</a>
        </x-slot>

        <x-slot name="thead">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Create</th>
                <th>Last Modified</th>
                <th>Actions</th>
            </tr>
        </x-slot>

        <x-slot name="tbody">

        </x-slot>
    </x-table>

    <x-slot name="scripts">
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                $('#roles-table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '{{ route('settings.role.get-data') }}',
                    order: [
                        [3, 'desc']
                    ],
                    columns: [{
                            data: "DT_RowIndex",
                            name: 'DT_RowIndex',
                            orderable: false,
                            searchable: false
                        },
                        {
                            data: 'name',
                            name: 'name'
                        },
                        {
                            data: 'created_at',
                            name: 'created_at'
                        },
                        {
                            data: 'updated_at',
                            name: 'updated_at'
                        }, {
                            data: 'action',
                            name: 'action',
                            orderable: false,
                            searchable: false
                        }
                    ]
                });
            });
        </script>
    </x-slot>

</x-main>
