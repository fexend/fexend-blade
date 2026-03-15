<?php
use function Laravel\Folio\name;
name('pages.users');
?>

<x-main title="Users">
    <x-breadcrumb>
        <x-breadcrumb-item :href="route('dashboard')" title="Dashboard"></x-breadcrumb-item>
        <x-breadcrumb-item :href="route('pages.index')" title="Pages"></x-breadcrumb-item>
        <x-breadcrumb-item title="Users" active></x-breadcrumb-item>
    </x-breadcrumb>

    <div
        x-data="{
            search: '',
            roleFilter: '',
            statusFilter: '',
            selectedUsers: [],
            currentPage: 1,
            perPage: 10,
            showDeleteModal: false,
            deleteTarget: null,
            users: [
                { id: 1, name: 'Alice Johnson', email: 'alice@acmecorp.com', role: 'Admin', status: 'Active', joined: 'Jan 5, 2024', lastActive: '2 hours ago', avatar: 'https://ui-avatars.com/api/?name=Alice+Johnson&background=615fff&color=fff' },
                { id: 2, name: 'Bob Martinez', email: 'bob@acmecorp.com', role: 'Editor', status: 'Active', joined: 'Jan 12, 2024', lastActive: '1 day ago', avatar: 'https://ui-avatars.com/api/?name=Bob+Martinez&background=10b981&color=fff' },
                { id: 3, name: 'Clara Nguyen', email: 'clara@designco.io', role: 'Viewer', status: 'Active', joined: 'Feb 1, 2024', lastActive: '3 hours ago', avatar: 'https://ui-avatars.com/api/?name=Clara+Nguyen&background=f59e0b&color=fff' },
                { id: 4, name: 'David Kim', email: 'david@devteam.io', role: 'Editor', status: 'Inactive', joined: 'Feb 14, 2024', lastActive: '2 weeks ago', avatar: 'https://ui-avatars.com/api/?name=David+Kim&background=ef4444&color=fff' },
                { id: 5, name: 'Eva Chen', email: 'eva@studio.io', role: 'Viewer', status: 'Active', joined: 'Feb 20, 2024', lastActive: '5 minutes ago', avatar: 'https://ui-avatars.com/api/?name=Eva+Chen&background=8b5cf6&color=fff' },
                { id: 6, name: 'Frank Rivera', email: 'frank@techcorp.com', role: 'Admin', status: 'Active', joined: 'Mar 1, 2024', lastActive: '1 hour ago', avatar: 'https://ui-avatars.com/api/?name=Frank+Rivera&background=0ea5e9&color=fff' },
                { id: 7, name: 'Grace Lee', email: 'grace@marketingco.com', role: 'Editor', status: 'Suspended', joined: 'Mar 8, 2024', lastActive: '1 month ago', avatar: 'https://ui-avatars.com/api/?name=Grace+Lee&background=ec4899&color=fff' },
                { id: 8, name: 'Henry Park', email: 'henry@salesco.io', role: 'Viewer', status: 'Active', joined: 'Mar 15, 2024', lastActive: '30 minutes ago', avatar: 'https://ui-avatars.com/api/?name=Henry+Park&background=14b8a6&color=fff' },
                { id: 9, name: 'Isabella Torres', email: 'isabella@creatives.io', role: 'Editor', status: 'Active', joined: 'Mar 22, 2024', lastActive: '4 hours ago', avatar: 'https://ui-avatars.com/api/?name=Isabella+Torres&background=f97316&color=fff' },
                { id: 10, name: 'James Wilson', email: 'james@ops.com', role: 'Viewer', status: 'Inactive', joined: 'Mar 28, 2024', lastActive: '3 weeks ago', avatar: 'https://ui-avatars.com/api/?name=James+Wilson&background=64748b&color=fff' },
            ],
            get filteredUsers() {
                return this.users.filter(u => {
                    const matchSearch = this.search === '' || u.name.toLowerCase().includes(this.search.toLowerCase()) || u.email.toLowerCase().includes(this.search.toLowerCase());
                    const matchRole = this.roleFilter === '' || u.role === this.roleFilter;
                    const matchStatus = this.statusFilter === '' || u.status === this.statusFilter;
                    return matchSearch && matchRole && matchStatus;
                });
            },
            get paginatedUsers() {
                const start = (this.currentPage - 1) * this.perPage;
                return this.filteredUsers.slice(start, start + this.perPage);
            },
            get totalPages() {
                return Math.ceil(this.filteredUsers.length / this.perPage);
            },
            get stats() {
                return {
                    total: this.users.length,
                    active: this.users.filter(u => u.status === 'Active').length,
                    newThisMonth: this.users.filter(u => u.joined.includes('Mar')).length,
                    suspended: this.users.filter(u => u.status === 'Suspended').length,
                };
            },
            toggleUser(id) {
                const idx = this.selectedUsers.indexOf(id);
                if (idx > -1) this.selectedUsers.splice(idx, 1);
                else this.selectedUsers.push(id);
            },
            toggleAll() {
                if (this.selectedUsers.length === this.paginatedUsers.length) {
                    this.selectedUsers = [];
                } else {
                    this.selectedUsers = this.paginatedUsers.map(u => u.id);
                }
            },
            confirmDelete(user) {
                this.deleteTarget = user;
                this.showDeleteModal = true;
            },
            deleteUser() {
                if (this.deleteTarget) {
                    this.users = this.users.filter(u => u.id !== this.deleteTarget.id);
                }
                this.showDeleteModal = false;
                this.deleteTarget = null;
            }
        }"
    >
        <!-- Page Header -->
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-2xl font-bold text-slate-900 dark:text-slate-100">Users</h1>
            <button class="button button-primary flex items-center gap-1.5 text-sm px-3 py-2 rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14"/><path d="M5 12l14 0"/></svg>
                Add User
            </button>
        </div>

        <!-- Stats Row -->
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
            <div class="stat-card">
                <p class="stat-card-label">Total Users</p>
                <p class="stat-card-value mt-1" x-text="stats.total"></p>
            </div>
            <div class="stat-card">
                <p class="stat-card-label">Active Users</p>
                <p class="stat-card-value mt-1 text-success dark:text-success-dark" x-text="stats.active"></p>
            </div>
            <div class="stat-card">
                <p class="stat-card-label">New This Month</p>
                <p class="stat-card-value mt-1 text-primary dark:text-primary-dark" x-text="stats.newThisMonth"></p>
            </div>
            <div class="stat-card">
                <p class="stat-card-label">Suspended</p>
                <p class="stat-card-value mt-1 text-danger dark:text-danger-dark" x-text="stats.suspended"></p>
            </div>
        </div>

        <!-- Filter / Search Bar -->
        <div class="card p-4 mb-4">
            <div class="flex flex-col sm:flex-row gap-3">
                <div class="relative flex-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-slate-400" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"/><path d="M21 21l-6 -6"/></svg>
                    <input type="search" x-model="search" @input="currentPage = 1" placeholder="Search by name or email..." class="input w-full pl-9 text-sm" />
                </div>
                <select x-model="roleFilter" @change="currentPage = 1" class="select text-sm sm:w-36">
                    <option value="">All Roles</option>
                    <option value="Admin">Admin</option>
                    <option value="Editor">Editor</option>
                    <option value="Viewer">Viewer</option>
                </select>
                <select x-model="statusFilter" @change="currentPage = 1" class="select text-sm sm:w-40">
                    <option value="">All Statuses</option>
                    <option value="Active">Active</option>
                    <option value="Inactive">Inactive</option>
                    <option value="Suspended">Suspended</option>
                </select>
            </div>
        </div>

        <!-- Users Table -->
        <div class="card overflow-hidden">
            <div class="overflow-x-auto">
                <table class="table w-full">
                    <thead>
                        <tr class="border-b border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800/50">
                            <th class="py-3 px-4 w-10">
                                <input
                                    type="checkbox"
                                    class="rounded border-slate-300 dark:border-slate-600"
                                    :checked="selectedUsers.length === paginatedUsers.length && paginatedUsers.length > 0"
                                    @change="toggleAll()"
                                />
                            </th>
                            <th class="py-3 px-4 text-left text-xs font-semibold uppercase tracking-wider text-slate-500 dark:text-slate-400">User</th>
                            <th class="py-3 px-4 text-left text-xs font-semibold uppercase tracking-wider text-slate-500 dark:text-slate-400">Role</th>
                            <th class="py-3 px-4 text-left text-xs font-semibold uppercase tracking-wider text-slate-500 dark:text-slate-400">Status</th>
                            <th class="py-3 px-4 text-left text-xs font-semibold uppercase tracking-wider text-slate-500 dark:text-slate-400 hidden lg:table-cell">Join Date</th>
                            <th class="py-3 px-4 text-left text-xs font-semibold uppercase tracking-wider text-slate-500 dark:text-slate-400 hidden lg:table-cell">Last Active</th>
                            <th class="py-3 px-4 text-right text-xs font-semibold uppercase tracking-wider text-slate-500 dark:text-slate-400">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <template x-for="user in paginatedUsers" :key="user.id">
                            <tr class="border-b border-slate-100 dark:border-slate-700/50 hover:bg-slate-50 dark:hover:bg-slate-700/20 transition-colors">
                                <td class="py-3 px-4">
                                    <input
                                        type="checkbox"
                                        class="rounded border-slate-300 dark:border-slate-600"
                                        :checked="selectedUsers.includes(user.id)"
                                        @change="toggleUser(user.id)"
                                    />
                                </td>
                                <td class="py-3 px-4">
                                    <div class="flex items-center gap-3">
                                        <img :src="user.avatar" :alt="user.name" class="w-8 h-8 rounded-full flex-shrink-0" />
                                        <div class="min-w-0">
                                            <p class="text-sm font-medium text-slate-900 dark:text-slate-100 truncate" x-text="user.name"></p>
                                            <p class="text-xs text-slate-500 dark:text-slate-400 truncate" x-text="user.email"></p>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-3 px-4">
                                    <span
                                        class="badge text-xs"
                                        :class="{
                                            'badge-primary-soft': user.role === 'Admin',
                                            'badge-secondary-soft': user.role === 'Editor',
                                            'badge-info-soft': user.role === 'Viewer'
                                        }"
                                        x-text="user.role"
                                    ></span>
                                </td>
                                <td class="py-3 px-4">
                                    <span
                                        class="badge text-xs"
                                        :class="{
                                            'badge-success-soft': user.status === 'Active',
                                            'badge-warning-soft': user.status === 'Inactive',
                                            'badge-danger-soft': user.status === 'Suspended'
                                        }"
                                        x-text="user.status"
                                    ></span>
                                </td>
                                <td class="py-3 px-4 text-sm text-slate-600 dark:text-slate-400 hidden lg:table-cell" x-text="user.joined"></td>
                                <td class="py-3 px-4 text-sm text-slate-600 dark:text-slate-400 hidden lg:table-cell" x-text="user.lastActive"></td>
                                <td class="py-3 px-4">
                                    <div class="flex items-center justify-end gap-1">
                                        <button
                                            class="p-1.5 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-700 text-slate-500 dark:text-slate-400 hover:text-primary dark:hover:text-primary-dark transition-colors"
                                            aria-label="Edit user"
                                        >
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"/><path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"/><path d="M16 5l3 3"/></svg>
                                        </button>
                                        <button
                                            @click="confirmDelete(user)"
                                            class="p-1.5 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-700 text-slate-500 dark:text-slate-400 hover:text-danger dark:hover:text-danger-dark transition-colors"
                                            aria-label="Delete user"
                                        >
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7l16 0"/><path d="M10 11l0 6"/><path d="M14 11l0 6"/><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"/><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"/></svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </template>

                        <!-- Empty State -->
                        <tr x-show="filteredUsers.length === 0">
                            <td colspan="7" class="py-12 text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 mx-auto text-slate-300 dark:text-slate-600 mb-3" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"/><path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"/><path d="M16 11l2 2l4 -4"/></svg>
                                <p class="text-sm text-slate-500 dark:text-slate-400">No users found</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="flex flex-col sm:flex-row items-center justify-between gap-3 px-4 py-3 border-t border-slate-200 dark:border-slate-700">
                <p class="text-sm text-slate-500 dark:text-slate-400">
                    Showing <span class="font-medium text-slate-700 dark:text-slate-200" x-text="Math.min((currentPage - 1) * perPage + 1, filteredUsers.length)"></span>
                    to <span class="font-medium text-slate-700 dark:text-slate-200" x-text="Math.min(currentPage * perPage, filteredUsers.length)"></span>
                    of <span class="font-medium text-slate-700 dark:text-slate-200" x-text="filteredUsers.length"></span> users
                </p>
                <div class="flex items-center gap-1">
                    <button
                        @click="currentPage = Math.max(1, currentPage - 1)"
                        :disabled="currentPage === 1"
                        class="px-2.5 py-1.5 rounded border border-slate-200 dark:border-slate-700 text-sm text-slate-600 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-700 disabled:opacity-40 disabled:cursor-not-allowed"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 6l-6 6l6 6"/></svg>
                    </button>
                    <template x-for="page in totalPages" :key="page">
                        <button
                            @click="currentPage = page"
                            :class="currentPage === page ? 'bg-primary text-white border-primary' : 'border-slate-200 dark:border-slate-700 text-slate-600 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-700'"
                            class="px-3 py-1.5 rounded border text-sm"
                            x-text="page"
                        ></button>
                    </template>
                    <button
                        @click="currentPage = Math.min(totalPages, currentPage + 1)"
                        :disabled="currentPage === totalPages || totalPages === 0"
                        class="px-2.5 py-1.5 rounded border border-slate-200 dark:border-slate-700 text-sm text-slate-600 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-700 disabled:opacity-40 disabled:cursor-not-allowed"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 6l6 6l-6 6"/></svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Delete Confirmation Modal -->
        <div
            x-show="showDeleteModal"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="fixed inset-0 z-50 flex items-center justify-center bg-black/50 backdrop-blur-sm"
            @click.self="showDeleteModal = false"
        >
            <div
                x-show="showDeleteModal"
                x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 scale-95"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-150"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-95"
                class="bg-white dark:bg-slate-800 rounded-xl shadow-xl p-6 w-full max-w-sm mx-4"
            >
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-10 h-10 rounded-full bg-danger/10 dark:bg-danger/20 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-danger dark:text-danger-dark" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 9v4"/><path d="M10.363 3.591l-8.106 13.534a1.914 1.914 0 0 0 1.636 2.871h16.214a1.914 1.914 0 0 0 1.636 -2.87l-8.106 -13.536a1.914 1.914 0 0 0 -3.274 0z"/><path d="M12 16h.01"/></svg>
                    </div>
                    <h3 class="text-base font-semibold text-slate-900 dark:text-slate-100">Delete User</h3>
                </div>
                <p class="text-sm text-slate-600 dark:text-slate-400 mb-6">
                    Are you sure you want to delete <span class="font-semibold text-slate-800 dark:text-slate-200" x-text="deleteTarget?.name"></span>? This action cannot be undone.
                </p>
                <div class="flex items-center gap-3 justify-end">
                    <button @click="showDeleteModal = false" class="button px-4 py-2 text-sm rounded-lg border border-slate-200 dark:border-slate-700 text-slate-700 dark:text-slate-200 hover:bg-slate-50 dark:hover:bg-slate-700">Cancel</button>
                    <button @click="deleteUser()" class="button px-4 py-2 text-sm rounded-lg bg-danger text-white hover:bg-danger/90">Delete</button>
                </div>
            </div>
        </div>
    </div>
</x-main>
