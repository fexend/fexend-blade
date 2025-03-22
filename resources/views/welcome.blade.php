<x-main title="Custom Dashboard">

    <x-breadcrumb>
        <x-breadcrumb-item title="Dashboard"></x-breadcrumb-item>
        <x-breadcrumb-item title="Dashboard"></x-breadcrumb-item>
        <x-breadcrumb-item title="Dashboard" active></x-breadcrumb-item>
    </x-breadcrumb>

    {{-- Basic table with default content --}}
    <x-table />

    {{-- Custom table with slots --}}
    <x-table style="striped" title="Users Table">
        <x-slot:thead>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </x-slot:thead>

        <x-slot:tbody>
            @php
                $users = \App\Models\User::all();
            @endphp
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <button class="button button-primary">Button</button>
                    </td>
                </tr>
            @endforeach
        </x-slot:tbody>

        <x-slot:tfoot>
            <tr>
                <td colspan="6">Total users: {{ $users->count() }}</td>
            </tr>
        </x-slot:tfoot>
    </x-table>

    {{-- DataTable with custom filter --}}
    <x-table datatable="true" hasFilter="true" id="users-table" title="Users Management">
        <x-slot:actions>
            <button class="button button-success">Add New User</button>
            <button class="button button-warning">Export</button>
        </x-slot:actions>

        {{-- <x-slot:search>
            <div class="flex gap-2">
                <input type="text" placeholder="Search by name" class="w-64" />
                <button class="button button-primary">Search</button>
            </div>
        </x-slot:search> --}}

        <x-slot:filter>
            <div class="grid grid-cols-3 gap-4">
                <div class="form-group">
                    <label for="role-filter">Role</label>
                    <select id="role-filter">
                        <option value="">All Roles</option>
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="status-filter">Status</label>
                    <select id="status-filter">
                        <option value="">All Statuses</option>
                        <option value="active">Active</option>
                        <option value="banned">Banned</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="date-filter">Date</label>
                    <input type="date" id="date-filter" />
                </div>
            </div>
        </x-slot:filter>

        <x-slot:thead>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>

        </x-slot:thead>

        <x-slot:tbody>
            @php
                $users = \App\Models\User::all();
            @endphp
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <button class="button button-primary">Edit</button>
                        <button class="button button-danger">Delete</button>
                    </td>
                </tr>
            @endforeach

        </x-slot:tbody>
    </x-table>

    <x-tooltip>
        <x-slot name="content">
            Your custom tooltip text here
        </x-slot>
        <button class="button button-primary">Hover me</button>
    </x-tooltip>

    <x-slot name="scripts">
        <script>
            // Example script
            document.addEventListener('DOMContentLoaded', function() {
                // Initialize DataTable
                const table = new DataTable('#users-table', {
                    searchable: true,
                    fixedHeight: true,
                });
            });
        </script>
    </x-slot>

</x-main>
