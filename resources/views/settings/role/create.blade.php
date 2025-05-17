<x-main :title="$title" isSidebarOpen="true">
    <x-breadcrumb>
        <x-breadcrumb-item :href="route('settings.index')" title="Settings"></x-breadcrumb-item>
        <x-breadcrumb-item :href="route('settings.role.index')" title="Role"></x-breadcrumb-item>
        <x-breadcrumb-item :href="route('settings.role.create')" title="Create Role" active></x-breadcrumb-item>
    </x-breadcrumb>

    <x-card title="Create Role" class="mb-6">
        <form action="{{ route('settings.role.store') }}" method="post">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                <x-input id="name" name="name" label="Name" placeholder="Role name" type="text" required />
            </div>

            <div class="mb-6" x-data="{
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
            masterChecked: false,

                toggleMaster() {
                    this.masterChecked = !this.masterChecked;
                    for (const group in this.groups) {
                        this.groups[group].checked = this.masterChecked;
                    }
                },

                toggleGroup(group) {
                    this.groups[group].checked = !this.groups[group].checked;
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
                                    <x-switch-input name="permissions[]" id="permission_{{ Str::snake($permission->name) }}" value="{{ $permission->name }}" x-bind:checked="groups['{{ $group }}'].checked || isPermissionChecked('{{ $permission->name }}')" @click="groups['{{ $group }}'].checked = false; updateMasterState()" variant="primary">
                                        {{ $permission->name }}
                                    </x-switch-input>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <x-button class="button-primary" type="submit">Create Role</x-button>
        </form>
    </x-card>
</x-main>
