<x-main :title="$title" isSidebarOpen="true">
    <x-breadcrumb>
        <x-breadcrumb-item :href="route('settings.index')" title="Settings"></x-breadcrumb-item>
        <x-breadcrumb-item :href="route('settings.role.index')" title="Role"></x-breadcrumb-item>
        <x-breadcrumb-item :href="route('settings.role.edit', ['role' => $role])" title="Edit Role" active></x-breadcrumb-item>
    </x-breadcrumb>

    <x-card title="Edit Role" class="mb-6">
        <form action="{{ route('settings.role.update', ['role' => $role]) }}" method="post">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                <x-input id="name" name="name" label="Name" placeholder="Role name" type="text" value="{{ $role->name }}" required />
            </div>

            <div class="mb-6" x-data="{
                rolePermissions: [
                    @foreach ($role->permissions as $permission)
                        '{{ $permission->name }}', @endforeach
                ],
                groups: {
                    @foreach ($permissions->groupBy('group') as $group => $groupPermissions)
                        '{{ $group }}': {
                            checked: false,
                            permissions: [
                                @foreach ($groupPermissions as $permission)
                                    '{{ $permission->name }}', @endforeach
                ]
            },
            @endforeach
            },

            permissionStates: {},
                masterChecked: false,

                init() {
                    // Initialize permissionStates based on rolePermissions
                    for (const group in this.groups) {
                        for (const permission of this.groups[group].permissions) {
                            this.permissionStates[permission] = this.rolePermissions.includes(permission);
                        }
                    }

                    // Check each group if all its permissions are already assigned
                    for (const group in this.groups) {
                        let allGroupPermissionsAssigned = true;

                        // Check if all permissions in this group are assigned to the role
                        for (const permission of this.groups[group].permissions) {
                            if (!this.rolePermissions.includes(permission)) {
                                allGroupPermissionsAssigned = false;
                                break;
                            }
                        }

                        // Set group checkbox based on whether all permissions are assigned
                        this.groups[group].checked = allGroupPermissionsAssigned;
                    }

                    // Check if all groups are checked to determine master checkbox state
                    this.updateMasterState();
                },

                toggleMaster() {
                    this.masterChecked = !this.masterChecked;

                    // Update all group checkboxes
                    for (const group in this.groups) {
                        this.groups[group].checked = this.masterChecked;

                        // Update all individual permission states for this group
                        for (const permission of this.groups[group].permissions) {
                            this.permissionStates[permission] = this.masterChecked;
                        }
                    }
                },

                toggleGroup(group) {
                    this.groups[group].checked = !this.groups[group].checked;

                    // Update individual permission states for this group
                    for (const permission of this.groups[group].permissions) {
                        this.permissionStates[permission] = this.groups[group].checked;
                    }

                    this.updateMasterState();
                },

                togglePermission(permission, group) {
                    // Toggle this specific permission
                    this.permissionStates[permission] = !this.permissionStates[permission];

                    // Check if all permissions in the group are now checked
                    let allChecked = true;
                    for (const perm of this.groups[group].permissions) {
                        if (!this.permissionStates[perm]) {
                            allChecked = false;
                            break;
                        }
                    }

                    // Update the group's checked state
                    this.groups[group].checked = allChecked;

                    // Update master checkbox state
                    this.updateMasterState();
                },

                updateMasterState() {
                    let allChecked = true;
                    for (const group in this.groups) {
                        if (!this.groups[group].checked) {
                            allChecked = false;
                            break;
                        }
                    }
                    this.masterChecked = allChecked;
                },

                isPermissionChecked(permissionName) {
                    // Check if we have a direct state for this permission
                    if (this.permissionStates[permissionName] !== undefined) {
                        return this.permissionStates[permissionName];
                    }

                    // Check if it's already assigned to the role
                    if (this.rolePermissions.includes(permissionName)) {
                        return true;
                    }

                    // Or check if it's selected through group selection
                    for (const group in this.groups) {
                        if (this.groups[group].checked && this.groups[group].permissions.includes(permissionName)) {
                            return true;
                        }
                    }
                    return false;
                }
            }">
                <div class="flex flex-col mb-6">
                    <h3 class="text-lg font-medium">Permissions</h3>
                    <div class="mt-4">
                        <x-switch-input id="check_all" @click="toggleMaster()" x-bind:checked="masterChecked" variant="primary">
                            Check All Permissions
                        </x-switch-input>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    @foreach ($permissions->groupBy('group') as $group => $groupPermissions)
                        <div class="mb-4">
                            <div class="flex flex-col">
                                <h4 class="font-medium text-md">{{ ucfirst($group) }}</h4>
                                <div class="mt-4">
                                    <x-switch-input id="check_group_{{ Str::slug($group) }}" @click="toggleGroup('{{ $group }}')" x-bind:checked="groups['{{ $group }}'].checked" variant="secondary">
                                        Check All {{ ucfirst($group) }}
                                    </x-switch-input>
                                </div>
                            </div>
                            <div class="flex flex-col">
                                @foreach ($groupPermissions as $permission)
                                    <x-switch-input name="permissions[]" id="permission_{{ Str::snake($permission->name) }}" value="{{ $permission->name }}" x-bind:checked="permissionStates['{{ $permission->name }}'] !== undefined ? permissionStates['{{ $permission->name }}'] : isPermissionChecked('{{ $permission->name }}')" @click="togglePermission('{{ $permission->name }}', '{{ $group }}')" variant="primary">
                                        {{ $permission->name }}
                                    </x-switch-input>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <x-button class="button-primary" type="submit">Update Role</x-button>
        </form>
    </x-card>
</x-main>
