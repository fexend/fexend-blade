<x-main :title="$title" isSidebarOpen="true">
    <x-breadcrumb>
        <x-breadcrumb-item :href="route('master.index')" title="Master"></x-breadcrumb-item>
        <x-breadcrumb-item :href="route('master.user.index')" title="User"></x-breadcrumb-item>
        <x-breadcrumb-item title="Create User" active></x-breadcrumb-item>
    </x-breadcrumb>

    <x-card title="Create Role" class="mb-6 w-full md:w-1/2">
        <form action="{{ route('master.user.store') }}" method="post">
            @csrf
            <div class="grid grid-cols-1 mb-6">
                <x-input id="name" name="name" label="Name" placeholder="Name" type="text" required />
                <x-input id="email" name="email" label="Email" placeholder="Email Address" type="text" required />
                <x-input-password name="password" label="Password" placeholder="Password...." required></x-input-password>
                <x-input-password name="password_confirmation" label="Password Confirmation" placeholder="Password Confirmation...." required></x-input-password>

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
                    width: '100%',
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
