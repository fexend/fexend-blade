<x-main :title="$title" isSidebarOpen="true">
    <x-breadcrumb>
        <x-breadcrumb-item :href="route('settings.index')" title="Settings"></x-breadcrumb-item>
        <x-breadcrumb-item title="Permission" active></x-breadcrumb-item>
    </x-breadcrumb>
    <x-table datatable id="permissions-table">

        <x-slot name="actions">
            <a href="{{ route('settings.permission.create') }}" class="button button-primary">Create Role</a>
        </x-slot>

        <x-slot name="search">
            <x-input-search id="search" label="Search" name="search"></x-input-search>
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
                $('#permissions-table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '{{ route('settings.permission.get-data') }}',
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

                $('.dt-search').hide();
                $('#search').on('keyup', debounce(function() {
                    $('#permissions-table').DataTable().search(this.value).draw();
                }, 500));
            });
        </script>
    </x-slot>

</x-main>
