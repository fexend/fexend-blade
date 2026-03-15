<?php
use function Laravel\Folio\name;
name('element.datatable');
?>

<x-main title="DataTable">
    <x-breadcrumb>
        <x-breadcrumb-item :href="route('dashboard')" title="Dashboard"></x-breadcrumb-item>
        <x-breadcrumb-item :href="route('element.index')" title="Elements"></x-breadcrumb-item>
        <x-breadcrumb-item title="Datatable" active></x-breadcrumb-item>
    </x-breadcrumb>

    <h1 class="heading-1 mb-8">DataTable</h1>

    <section class="mb-10">
        <h2 class="heading-2 mb-6">Full DataTable with Search, Sort & Pagination</h2>
        <div class="card-table">
            <div class="table-container p-4">
                <table id="dt-main" class="w-full" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Revenue</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>1</td><td>Bob A</td><td>user1@example.com</td><td>Editor</td><td>Active</td><td>$1,150</td></tr>
                        <tr><td>2</td><td>Carol B</td><td>user2@example.com</td><td>Viewer</td><td>Inactive</td><td>$1,300</td></tr>
                        <tr><td>3</td><td>Alice C</td><td>user3@example.com</td><td>Guest</td><td>Active</td><td>$1,450</td></tr>
                        <tr><td>4</td><td>Bob D</td><td>user4@example.com</td><td>Admin</td><td>Active</td><td>$1,600</td></tr>
                        <tr><td>5</td><td>Carol E</td><td>user5@example.com</td><td>Editor</td><td>Inactive</td><td>$1,750</td></tr>
                        <tr><td>6</td><td>Alice F</td><td>user6@example.com</td><td>Viewer</td><td>Active</td><td>$1,900</td></tr>
                        <tr><td>7</td><td>Bob G</td><td>user7@example.com</td><td>Guest</td><td>Active</td><td>$2,050</td></tr>
                        <tr><td>8</td><td>Carol H</td><td>user8@example.com</td><td>Admin</td><td>Inactive</td><td>$2,200</td></tr>
                        <tr><td>9</td><td>Alice I</td><td>user9@example.com</td><td>Editor</td><td>Active</td><td>$2,350</td></tr>
                        <tr><td>10</td><td>Bob J</td><td>user10@example.com</td><td>Viewer</td><td>Active</td><td>$2,500</td></tr>
                        <tr><td>11</td><td>Carol K</td><td>user11@example.com</td><td>Guest</td><td>Inactive</td><td>$2,650</td></tr>
                        <tr><td>12</td><td>Alice L</td><td>user12@example.com</td><td>Admin</td><td>Active</td><td>$2,800</td></tr>
                        <tr><td>13</td><td>Bob M</td><td>user13@example.com</td><td>Editor</td><td>Active</td><td>$2,950</td></tr>
                        <tr><td>14</td><td>Carol N</td><td>user14@example.com</td><td>Viewer</td><td>Inactive</td><td>$3,100</td></tr>
                        <tr><td>15</td><td>Alice O</td><td>user15@example.com</td><td>Guest</td><td>Active</td><td>$3,250</td></tr>
                        <tr><td>16</td><td>Bob P</td><td>user16@example.com</td><td>Admin</td><td>Active</td><td>$3,400</td></tr>
                        <tr><td>17</td><td>Carol Q</td><td>user17@example.com</td><td>Editor</td><td>Inactive</td><td>$3,550</td></tr>
                        <tr><td>18</td><td>Alice R</td><td>user18@example.com</td><td>Viewer</td><td>Active</td><td>$3,700</td></tr>
                        <tr><td>19</td><td>Bob S</td><td>user19@example.com</td><td>Guest</td><td>Active</td><td>$3,850</td></tr>
                        <tr><td>20</td><td>Carol T</td><td>user20@example.com</td><td>Admin</td><td>Inactive</td><td>$4,000</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section class="mb-10">
        <h2 class="heading-2 mb-6">Table with Avatars & Badges</h2>
        <div class="card-table">
            <div class="table-container">
                <table id="dt-avatars" class="w-full" style="width:100%">
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>Department</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="flex items-center gap-3">
                                    <img src="https://ui-avatars.com/api/?name=Alice+Wang&background=615fff&color=fff&size=32" class="w-8 h-8 rounded-full" alt="Alice Wang">
                                    <div>
                                        <div class="font-medium text-slate-900 dark:text-slate-100">Alice Wang</div>
                                        <div class="text-xs text-slate-500 dark:text-slate-400">alice@example.com</div>
                                    </div>
                                </div>
                            </td>
                            <td>Engineering</td>
                            <td><span class="badge badge-primary-soft">Admin</span></td>
                            <td><span class="badge badge-success-soft">Active</span></td>
                            <td>
                                <div class="flex items-center gap-2">
                                    <button class="button button-sm button-primary-outline">Edit</button>
                                    <button class="button button-sm button-danger-outline">Delete</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="flex items-center gap-3">
                                    <img src="https://ui-avatars.com/api/?name=Bob+Smith&background=9333ea&color=fff&size=32" class="w-8 h-8 rounded-full" alt="Bob Smith">
                                    <div>
                                        <div class="font-medium text-slate-900 dark:text-slate-100">Bob Smith</div>
                                        <div class="text-xs text-slate-500 dark:text-slate-400">bob@example.com</div>
                                    </div>
                                </div>
                            </td>
                            <td>Marketing</td>
                            <td><span class="badge badge-secondary-soft">Editor</span></td>
                            <td><span class="badge badge-success-soft">Active</span></td>
                            <td>
                                <div class="flex items-center gap-2">
                                    <button class="button button-sm button-primary-outline">Edit</button>
                                    <button class="button button-sm button-danger-outline">Delete</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="flex items-center gap-3">
                                    <img src="https://ui-avatars.com/api/?name=Carol+Jones&background=00c950&color=fff&size=32" class="w-8 h-8 rounded-full" alt="Carol Jones">
                                    <div>
                                        <div class="font-medium text-slate-900 dark:text-slate-100">Carol Jones</div>
                                        <div class="text-xs text-slate-500 dark:text-slate-400">carol@example.com</div>
                                    </div>
                                </div>
                            </td>
                            <td>Design</td>
                            <td><span class="badge badge-info-soft">Viewer</span></td>
                            <td><span class="badge badge-danger-soft">Inactive</span></td>
                            <td>
                                <div class="flex items-center gap-2">
                                    <button class="button button-sm button-primary-outline">Edit</button>
                                    <button class="button button-sm button-danger-outline">Delete</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="flex items-center gap-3">
                                    <img src="https://ui-avatars.com/api/?name=David+Lee&background=f59e08&color=fff&size=32" class="w-8 h-8 rounded-full" alt="David Lee">
                                    <div>
                                        <div class="font-medium text-slate-900 dark:text-slate-100">David Lee</div>
                                        <div class="text-xs text-slate-500 dark:text-slate-400">david@example.com</div>
                                    </div>
                                </div>
                            </td>
                            <td>Finance</td>
                            <td><span class="badge badge-warning-soft">Guest</span></td>
                            <td><span class="badge badge-success-soft">Active</span></td>
                            <td>
                                <div class="flex items-center gap-2">
                                    <button class="button button-sm button-primary-outline">Edit</button>
                                    <button class="button button-sm button-danger-outline">Delete</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="flex items-center gap-3">
                                    <img src="https://ui-avatars.com/api/?name=Eva+Chen&background=00b8db&color=fff&size=32" class="w-8 h-8 rounded-full" alt="Eva Chen">
                                    <div>
                                        <div class="font-medium text-slate-900 dark:text-slate-100">Eva Chen</div>
                                        <div class="text-xs text-slate-500 dark:text-slate-400">eva@example.com</div>
                                    </div>
                                </div>
                            </td>
                            <td>HR</td>
                            <td><span class="badge badge-primary-soft">Admin</span></td>
                            <td><span class="badge badge-warning-soft">Pending</span></td>
                            <td>
                                <div class="flex items-center gap-2">
                                    <button class="button button-sm button-primary-outline">Edit</button>
                                    <button class="button button-sm button-danger-outline">Delete</button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section class="mb-10">
        <h2 class="heading-2 mb-6">Table with Filter (Collapse)</h2>
        <div class="card-table" x-data="{ filtersOpen: false, search: '', role: '', status: '' }">
            <!-- Filter collapse header -->
            <div class="flex items-center justify-between p-4 border-b border-slate-200 dark:border-slate-700">
                <h3 class="font-semibold text-slate-900 dark:text-slate-100">User List</h3>
                <button
                    class="button button-sm button-dark-outline flex items-center gap-2"
                    @click="filtersOpen = !filtersOpen"
                    :aria-expanded="filtersOpen"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"/>
                    </svg>
                    Filters
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 transition-transform" :class="filtersOpen ? 'rotate-180' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
            </div>

            <!-- Collapse filter panel -->
            <div
                x-show="filtersOpen"
                x-collapse
                x-cloak
                class="border-b border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800/50"
            >
                <div class="p-4 grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <div class="form-group">
                        <label class="label">Search</label>
                        <div class="input-icon-left">
                            <span class="input-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                            </span>
                            <input type="search" class="input" placeholder="Search users..." x-model="search" id="dt-filter-search">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="label">Role</label>
                        <select class="select" x-model="role" id="dt-filter-role">
                            <option value="">All Roles</option>
                            <option>Admin</option>
                            <option>Editor</option>
                            <option>Viewer</option>
                            <option>Guest</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="label">Status</label>
                        <select class="select" x-model="status" id="dt-filter-status">
                            <option value="">All Statuses</option>
                            <option>Active</option>
                            <option>Inactive</option>
                        </select>
                    </div>
                </div>
                <div class="px-4 pb-4 flex gap-2">
                    <button class="button button-sm button-primary" @click="
                        $nextTick(() => {
                            window.dtFilter.search(search).column(2).search(role).column(3).search(status).draw();
                        })
                    ">Apply Filters</button>
                    <button class="button button-sm button-dark-outline" @click="
                        search = ''; role = ''; status = '';
                        $nextTick(() => { window.dtFilter.search('').columns().search('').draw(); })
                    ">Reset</button>
                </div>
            </div>

            <div class="table-container">
                <table id="dt-filter" class="w-full" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Joined</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>1</td><td>Alice Wang</td><td>Admin</td><td>Active</td><td>Jan 2024</td></tr>
                        <tr><td>2</td><td>Bob Smith</td><td>Editor</td><td>Active</td><td>Feb 2024</td></tr>
                        <tr><td>3</td><td>Carol Jones</td><td>Viewer</td><td>Inactive</td><td>Mar 2024</td></tr>
                        <tr><td>4</td><td>David Lee</td><td>Guest</td><td>Active</td><td>Apr 2024</td></tr>
                        <tr><td>5</td><td>Eva Chen</td><td>Admin</td><td>Active</td><td>May 2024</td></tr>
                        <tr><td>6</td><td>Frank Kim</td><td>Editor</td><td>Inactive</td><td>Jun 2024</td></tr>
                        <tr><td>7</td><td>Grace Liu</td><td>Viewer</td><td>Active</td><td>Jul 2024</td></tr>
                        <tr><td>8</td><td>Hank Park</td><td>Guest</td><td>Active</td><td>Aug 2024</td></tr>
                        <tr><td>9</td><td>Iris Tan</td><td>Admin</td><td>Inactive</td><td>Sep 2024</td></tr>
                        <tr><td>10</td><td>Jack Wu</td><td>Editor</td><td>Active</td><td>Oct 2024</td></tr>
                        <tr><td>11</td><td>Karen Ho</td><td>Viewer</td><td>Active</td><td>Nov 2024</td></tr>
                        <tr><td>12</td><td>Leo Nguyen</td><td>Guest</td><td>Inactive</td><td>Dec 2024</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Usage -->
    <div class="card mt-8" x-data="{ copied: false }">
        <div class="card-body">
            <h2 class="text-lg font-semibold mb-3">Usage</h2>
            <div class="relative">
                <pre class="bg-slate-900 text-slate-100 rounded-lg p-4 overflow-x-auto text-sm"><code>&lt;table id="myTable" class="table"&gt;
  &lt;thead&gt;&lt;tr&gt;&lt;th&gt;Name&lt;/th&gt;&lt;/tr&gt;&lt;/thead&gt;
  &lt;tbody&gt;&lt;tr&gt;&lt;td&gt;Alice&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;
&lt;/table&gt;
&lt;script&gt;new DataTable('#myTable');&lt;/script&gt;</code></pre>
                <button
                    class="absolute top-3 right-3 btn btn-sm btn-secondary"
                    @click="copied = true; navigator.clipboard.writeText($el.closest('.relative').querySelector('code').textContent); setTimeout(() => copied = false, 2000)"
                    x-text="copied ? 'Copied!' : 'Copy'"
                >Copy</button>
            </div>
        </div>
    </div>

    <x-slot name="scripts">
        <script>
        window.addEventListener('load', function() {
            $('#dt-main').DataTable({
                pageLength: 5,
                lengthMenu: [5, 10, 25, 50],
                order: [[0, 'asc']],
            });

            $('#dt-avatars').DataTable({
                pageLength: 5,
                lengthMenu: [5, 10, 25],
                order: [[0, 'asc']],
            });

            window.dtFilter = $('#dt-filter').DataTable({
                pageLength: 5,
                lengthMenu: [5, 10, 25],
                searching: true,
                dom: 'tip',
            });
        });
        </script>
    </x-slot>
</x-main>
