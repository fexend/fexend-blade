<x-main :title="$title" isSidebarOpen="true">
    <x-breadcrumb>
        <x-breadcrumb-item :href="route('master.index')" title="Master"></x-breadcrumb-item>
        <x-breadcrumb-item title="User" active></x-breadcrumb-item>
    </x-breadcrumb>
    <x-table datatable id="roles-table" hasFilter>

        <x-slot name="actions">
            <a href="{{ route('master.user.create') }}" class="button button-primary">Create User</a>
        </x-slot>

        <x-slot name="filter">
            <x-select label="Role" id="select-3-role" multiple>

            </x-select>
            <div class="">
                <x-button class="button-primary">Filter</x-button>
            </div>
        </x-slot>

        <x-slot name="search">
            <x-input-search id="search" label="Search" name="search"></x-input-search>
        </x-slot>

        <x-slot name="thead">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Email Verified at</th>
                <th>Create</th>
                <th>Last Modified</th>
                <th>Actions</th>
            </tr>
        </x-slot>

        <x-slot name="tbody">

        </x-slot>
    </x-table>

    <!-- Update Password Modal -->
    <x-modal id="update-password-modal" title="Update User Password" size="md" :blur="true" :closeOnClickOutside="true">
        <div class="p-5">
            <form id="update-password-form" method="POST" class="space-y-4">
                @csrf
                <x-input-password name="password" label="Password" placeholder="Password...." required></x-input-password>
                <x-input-password name="password_confirmation" label="Password Confirmation" placeholder="Password Confirmation...." required></x-input-password>
                <div class="flex justify-end gap-3 mt-6">
                    <x-button type="button" @click="document.dispatchEvent(new CustomEvent('close-modal', { detail: 'update-password-modal' }))" class="button-secondary-soft">
                        Cancel
                    </x-button>
                    <x-button type="submit" class="button-primary">
                        Update Password
                    </x-button>
                </div>
            </form>
        </div>
    </x-modal>

    <x-slot name="scripts">
        <script>
            document.addEventListener('DOMContentLoaded', function() {

                $('#select-3-role').select2({
                    placeholder: 'Select Role',
                    allowClear: true,
                    ajax: {
                        url: '{{ route('select-option.role') }}', // Replace with your actual route for fetching roles
                        dataType: 'json',
                        delay: 250,
                        processResults: function(data) {
                            return {
                                results: $.map(data, function(item) {
                                    return {
                                        id: item.id,
                                        text: item.name,
                                    }
                                })
                            };
                        },
                        cache: true
                    }
                });

                $('#select-3-role').on('change', function() {
                    $('#roles-table').DataTable().column(3).search(this.value).draw(); // Assuming role is the 4th column (index 3)
                });

                // Handle update password button clicks
                $(document).on('click', '[id^="update-password-"]', function(e) {
                    e.preventDefault();

                    // Extract user ID from the button ID
                    let userId = $(this).attr('id').replace('update-password-', '');

                    // Set form action URL
                    $('#update-password-form').attr('action', `{{ route('master.user.index') }}/${userId}/update-password`);

                    // Open the modal
                    document.dispatchEvent(new CustomEvent('open-modal', {
                        detail: 'update-password-modal'
                    }));
                });

                $('#roles-table').DataTable({
                    processing: true,
                    serverSide: true,
                    width: '100%',
                    autoWidth: true,
                    ajax: {
                        url: '{{ route('master.user.get-data') }}',
                        data: function(d) {
                            d.search['value'] = $('#search').val();
                        }
                    },
                    order: [
                        [6, 'desc']
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
                            data: 'email',
                            name: 'email'
                        },
                        {
                            data: 'roles',
                            name: 'roles.name',
                            render: function(data, type, row) {
                                return data.map(role => role.name).join(', ');
                            },
                            orderable: false
                        },
                        {
                            data: 'email_verified_at',
                            name: 'email_verified_at'
                        },
                        {
                            data: 'created_at',
                            name: 'created_at'
                        },
                        {
                            data: 'updated_at',
                            name: 'updated_at'
                        },
                        {
                            data: 'action',
                            name: 'action',
                            orderable: false,
                            searchable: false
                        }
                    ]
                });

                $('.dt-search').hide();
                $('#search').on('keyup', debounce(function() {
                    $('#roles-table').DataTable().search(this.value).draw();
                }, 500));
            });
        </script>
    </x-slot>

</x-main>
