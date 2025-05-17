<x-main :title="$title" isSidebarOpen="true">
    <x-breadcrumb>
        <x-breadcrumb-item :href="route('master.index')" title="Master"></x-breadcrumb-item>
        <x-breadcrumb-item :href="route('master.user.index')" title="User"></x-breadcrumb-item>
        <x-breadcrumb-item title="Update User" active></x-breadcrumb-item>
    </x-breadcrumb>

    <x-card title="Create Role" class="mb-6">
        <form action="{{ route('master.user.update', ['user' => $user]) }}" method="post">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                <x-input id="name" name="name" label="Name" placeholder="Name" type="text" required value="{{ $user->name }}" />
                <x-input id="email" name="email" label="Email" placeholder="Email Address" type="text" required value="{{ $user->email }}" />
                <x-select id="select-2-role" name="role_id" label="Role" placeholder="Select Role">

                </x-select>
            </div>

            <x-button class="button-primary" type="submit">Update User</x-button>
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
