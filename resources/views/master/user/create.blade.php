<x-main :title="$title" isSidebarOpen="true">
    <x-breadcrumb>
        <x-breadcrumb-item :href="route('master.index')" title="Master"></x-breadcrumb-item>
        <x-breadcrumb-item :href="route('master.user.index')" title="User"></x-breadcrumb-item>
        <x-breadcrumb-item title="Create User" active></x-breadcrumb-item>
    </x-breadcrumb>

    <x-card title="Create Role" class="mb-6">
        <form action="{{ route('master.user.store') }}" method="post">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                <x-input id="name" name="name" label="Name" placeholder="Name" type="text" required />
                <x-input id="email" name="email" label="Email" placeholder="Email Address" type="text" required />

                <div x-data="{ showPassword: false }">
                    <x-input id="password" name="password" x-bind:type="showPassword ? 'text' : 'password'" label="Password" placeholder="Password" required icon>
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
                    <x-input id="password_confirmation" name="password_confirmation" x-bind:type="showConfirmPassword ? 'text' : 'password'" label="Password Confirmation" placeholder="Password Confirmation" required icon>
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

                <x-select id="select-2-role" name="role_id" label="Role" placeholder="Select Role">

                </x-select>
            </div>

            <x-button class="button-primary" type="submit">Create User</x-button>
        </form>
    </x-card>

    <x-slot name="scripts">
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                $('#select-2-role').select2({
                    placeholder: 'Select Role',
                    allowClear: true,
                    ajax: {
                        url: '{{ route('select-option.role') }}', // Replace with your actual route for fetching roles
                        dataType: 'json',
                        processResults: function(data) {
                            return {
                                results: data.map(function(item) {
                                    return {
                                        id: item.id,
                                        text: item.name
                                    };
                                })
                            };
                        }
                    }
                });
            });
        </script>
    </x-slot>
</x-main>
