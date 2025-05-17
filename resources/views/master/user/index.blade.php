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
            <x-input id="search" label="Search" type="text" placeholder="Search" name="search" icon>
                <x-slot name="iconContent">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-search">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                        <path d="M21 21l-6 -6" />
                    </svg>
                </x-slot>
            </x-input>
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

                <div x-data="{ showPassword: false }">
                    <x-input id="password" x-bind:type="showPassword ? 'text' : 'password'" label="New Password" name="password" required icon>
                        <x-slot name="iconContent">
                            <div class="cursor-pointer" @click="showPassword = !showPassword">
                                <!-- Show when password is hidden -->
                                <svg x-show="!showPassword" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-eye">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                    <path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" />
                                </svg>
                                <!-- Show when password is visible -->
                                <svg x-show="showPassword" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-eye-off">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M10.585 10.587a2 2 0 0 0 2.829 2.828" />
                                    <path d="M16.681 16.673a8.717 8.717 0 0 1 -4.681 1.327c-3.6 0 -6.6 -2 -9 -6c1.272 -2.12 2.712 -3.678 4.32 -4.674m2.86 -1.146a9.055 9.055 0 0 1 1.82 -.18c3.6 0 6.6 2 9 6c-.666 1.11 -1.379 2.067 -2.138 2.87" />
                                    <path d="M3 3l18 18" />
                                </svg>
                            </div>
                        </x-slot>
                    </x-input>
                </div>

                <div x-data="{ showConfirmPassword: false }">
                    <x-input id="password_confirmation" x-bind:type="showConfirmPassword ? 'text' : 'password'" label="Confirm Password" name="password_confirmation" required icon>
                        <x-slot name="iconContent">
                            <div class="cursor-pointer" @click="showConfirmPassword = !showConfirmPassword">
                                <!-- Show when password is hidden -->
                                <svg x-show="!showConfirmPassword" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-eye">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                    <path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" />
                                </svg>
                                <!-- Show when password is visible -->
                                <svg x-show="showConfirmPassword" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-eye-off">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M10.585 10.587a2 2 0 0 0 2.829 2.828" />
                                    <path d="M16.681 16.673a8.717 8.717 0 0 1 -4.681 1.327c-3.6 0 -6.6 -2 -9 -6c1.272 -2.12 2.712 -3.678 4.32 -4.674m2.86 -1.146a9.055 9.055 0 0 1 1.82 -.18c3.6 0 6.6 2 9 6c-.666 1.11 -1.379 2.067 -2.138 2.87" />
                                    <path d="M3 3l18 18" />
                                </svg>
                            </div>
                        </x-slot>
                    </x-input>
                </div>

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
