<?php
use function Laravel\Folio\name;
name('dashboard.dashboard-2');
?>

<x-main title="Dashboard 2">
    <x-slot name="scripts">
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    </x-slot>

    <x-breadcrumb>
        <x-breadcrumb-item :href="route('dashboard')" title="Dashboard"></x-breadcrumb-item>
        <x-breadcrumb-item title="Dashboard 2" active></x-breadcrumb-item>
    </x-breadcrumb>

    <h1 class="text-2xl font-bold text-slate-900 dark:text-slate-100 mb-6">Dashboard 2</h1>

    <!-- Stat Cards Row -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
        <!-- Active Projects -->
        <div class="stat-card stat-card-hover border-t-4 border-primary">
            <div class="flex items-start justify-between">
                <div>
                    <p class="stat-card-label">Active Projects</p>
                    <p class="stat-card-value mt-1">38</p>
                    <span class="stat-card-trend stat-card-trend-up">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 17l4 -4l4 4l4 -4l4 -4" />
                            <path d="M14 7h7v7" />
                        </svg>
                        +5 this week
                    </span>
                </div>
                <div class="stat-card-icon stat-card-icon-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 3a9 9 0 1 0 9 9" />
                        <path d="M15 9v6h6" />
                        <path d="M9 15l3 -3l2 2l3 -3" />
                    </svg>
                </div>
            </div>
        </div>

        <!-- Team Members -->
        <div class="stat-card stat-card-hover border-t-4 border-success">
            <div class="flex items-start justify-between">
                <div>
                    <p class="stat-card-label">Team Members</p>
                    <p class="stat-card-value mt-1">14</p>
                    <span class="stat-card-trend stat-card-trend-up">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 17l4 -4l4 4l4 -4l4 -4" />
                            <path d="M14 7h7v7" />
                        </svg>
                        2 new this month
                    </span>
                </div>
                <div class="stat-card-icon stat-card-icon-success">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                        <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                        <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                    </svg>
                </div>
            </div>
        </div>

        <!-- Open Tasks -->
        <div class="stat-card stat-card-hover border-t-4 border-warning">
            <div class="flex items-start justify-between">
                <div>
                    <p class="stat-card-label">Open Tasks</p>
                    <p class="stat-card-value mt-1">127</p>
                    <span class="stat-card-trend stat-card-trend-down">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 7l4 4l4 -4l4 4l4 4" />
                            <path d="M14 17h7v-7" />
                        </svg>
                        -12 resolved today
                    </span>
                </div>
                <div class="stat-card-icon stat-card-icon-warning">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />
                        <path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                        <path d="M9 12l.01 0" />
                        <path d="M13 12h2" />
                        <path d="M9 16l.01 0" />
                        <path d="M13 16h2" />
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Chart + Activity Row -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mb-6">
        <!-- Bar Chart: Monthly Tasks Completed -->
        <div class="card">
            <div class="p-6 pb-2">
                <h2 class="text-lg font-semibold text-slate-900 dark:text-slate-100">Monthly Tasks Completed</h2>
                <p class="text-sm text-slate-500 dark:text-slate-400">Task completion over the last 6 months</p>
            </div>
            <div
                class="px-4 pb-4"
                x-init="new ApexCharts($el, {
                    chart: { type: 'bar', height: 260, toolbar: { show: false }, fontFamily: 'Lexend, sans-serif' },
                    series: [{ name: 'Tasks', data: [45, 62, 38, 71, 55, 83] }],
                    xaxis: { categories: ['Aug','Sep','Oct','Nov','Dec','Jan'] },
                    colors: ['#615fff'],
                    plotOptions: { bar: { borderRadius: 4, columnWidth: '50%' } },
                    dataLabels: { enabled: false },
                    grid: { borderColor: '#e2e8f0', strokeDashArray: 4 }
                }).render()"
            ></div>
        </div>

        <!-- Team Activity -->
        <div class="card p-5">
            <h2 class="text-lg font-semibold text-slate-900 dark:text-slate-100 mb-4">Team Activity</h2>
            <ul>
                <li class="flex items-center gap-3 py-2 border-b border-slate-100 dark:border-slate-700 last:border-0">
                    <img
                        src="https://ui-avatars.com/api/?name=Alice+Morgan&background=615fff&color=fff&size=36"
                        alt="Alice Morgan"
                        class="w-9 h-9 rounded-full shrink-0"
                    />
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-medium text-slate-900 dark:text-slate-100">Alice Morgan</p>
                        <p class="text-xs text-slate-500 dark:text-slate-400 truncate">Completed task "Design review"</p>
                    </div>
                    <span class="text-xs text-slate-400 dark:text-slate-500 shrink-0">2m ago</span>
                </li>
                <li class="flex items-center gap-3 py-2 border-b border-slate-100 dark:border-slate-700 last:border-0">
                    <img
                        src="https://ui-avatars.com/api/?name=Ben+Carter&background=00c950&color=fff&size=36"
                        alt="Ben Carter"
                        class="w-9 h-9 rounded-full shrink-0"
                    />
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-medium text-slate-900 dark:text-slate-100">Ben Carter</p>
                        <p class="text-xs text-slate-500 dark:text-slate-400 truncate">Pushed 3 commits to main branch</p>
                    </div>
                    <span class="text-xs text-slate-400 dark:text-slate-500 shrink-0">15m ago</span>
                </li>
                <li class="flex items-center gap-3 py-2 border-b border-slate-100 dark:border-slate-700 last:border-0">
                    <img
                        src="https://ui-avatars.com/api/?name=Clara+Hayes&background=f59e08&color=fff&size=36"
                        alt="Clara Hayes"
                        class="w-9 h-9 rounded-full shrink-0"
                    />
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-medium text-slate-900 dark:text-slate-100">Clara Hayes</p>
                        <p class="text-xs text-slate-500 dark:text-slate-400 truncate">Created new project "Mobile App"</p>
                    </div>
                    <span class="text-xs text-slate-400 dark:text-slate-500 shrink-0">1h ago</span>
                </li>
                <li class="flex items-center gap-3 py-2 border-b border-slate-100 dark:border-slate-700 last:border-0">
                    <img
                        src="https://ui-avatars.com/api/?name=David+Lin&background=0ea5e9&color=fff&size=36"
                        alt="David Lin"
                        class="w-9 h-9 rounded-full shrink-0"
                    />
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-medium text-slate-900 dark:text-slate-100">David Lin</p>
                        <p class="text-xs text-slate-500 dark:text-slate-400 truncate">Closed 5 support tickets</p>
                    </div>
                    <span class="text-xs text-slate-400 dark:text-slate-500 shrink-0">3h ago</span>
                </li>
                <li class="flex items-center gap-3 py-2 border-b border-slate-100 dark:border-slate-700 last:border-0">
                    <img
                        src="https://ui-avatars.com/api/?name=Eva+Stone&background=9333ea&color=fff&size=36"
                        alt="Eva Stone"
                        class="w-9 h-9 rounded-full shrink-0"
                    />
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-medium text-slate-900 dark:text-slate-100">Eva Stone</p>
                        <p class="text-xs text-slate-500 dark:text-slate-400 truncate">Updated project milestone dates</p>
                    </div>
                    <span class="text-xs text-slate-400 dark:text-slate-500 shrink-0">5h ago</span>
                </li>
            </ul>
        </div>
    </div>

    <!-- Active Projects Table -->
    <div class="card card-table">
        <div class="p-6 pb-4 border-b border-slate-200 dark:border-slate-700">
            <h2 class="text-lg font-semibold text-slate-900 dark:text-slate-100">Active Projects</h2>
            <p class="text-sm text-slate-500 dark:text-slate-400">Current projects and their progress</p>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left">
                <thead class="bg-slate-50 dark:bg-slate-700/50 text-slate-600 dark:text-slate-400 uppercase text-xs">
                    <tr>
                        <th class="px-6 py-3 font-medium">Project</th>
                        <th class="px-6 py-3 font-medium">Status</th>
                        <th class="px-6 py-3 font-medium">Team</th>
                        <th class="px-6 py-3 font-medium">Progress</th>
                        <th class="px-6 py-3 font-medium">Due Date</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-200 dark:divide-slate-700">
                    <tr class="bg-white dark:bg-slate-800 hover:bg-slate-50 dark:hover:bg-slate-700/50 transition-colors">
                        <td class="px-6 py-4 font-medium text-slate-900 dark:text-slate-100">Redesign Dashboard</td>
                        <td class="px-6 py-4"><span class="badge badge-primary-soft">In Progress</span></td>
                        <td class="px-6 py-4">
                            <div class="flex -space-x-2">
                                <img src="https://ui-avatars.com/api/?name=A+M&background=615fff&color=fff&size=28" alt="AM" class="w-7 h-7 rounded-full ring-2 ring-white dark:ring-slate-800" />
                                <img src="https://ui-avatars.com/api/?name=B+C&background=00c950&color=fff&size=28" alt="BC" class="w-7 h-7 rounded-full ring-2 ring-white dark:ring-slate-800" />
                                <img src="https://ui-avatars.com/api/?name=C+H&background=f59e08&color=fff&size=28" alt="CH" class="w-7 h-7 rounded-full ring-2 ring-white dark:ring-slate-800" />
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-2">
                                <div class="flex-1 bg-slate-200 dark:bg-slate-700 rounded-full h-2">
                                    <div class="bg-primary rounded-full h-2" style="width:72%"></div>
                                </div>
                                <span class="text-xs text-slate-500 dark:text-slate-400 shrink-0">72%</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-slate-500 dark:text-slate-400">Mar 20, 2026</td>
                    </tr>
                    <tr class="bg-white dark:bg-slate-800 hover:bg-slate-50 dark:hover:bg-slate-700/50 transition-colors">
                        <td class="px-6 py-4 font-medium text-slate-900 dark:text-slate-100">Mobile App v2</td>
                        <td class="px-6 py-4"><span class="badge badge-warning-soft">On Hold</span></td>
                        <td class="px-6 py-4">
                            <div class="flex -space-x-2">
                                <img src="https://ui-avatars.com/api/?name=D+L&background=0ea5e9&color=fff&size=28" alt="DL" class="w-7 h-7 rounded-full ring-2 ring-white dark:ring-slate-800" />
                                <img src="https://ui-avatars.com/api/?name=E+S&background=9333ea&color=fff&size=28" alt="ES" class="w-7 h-7 rounded-full ring-2 ring-white dark:ring-slate-800" />
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-2">
                                <div class="flex-1 bg-slate-200 dark:bg-slate-700 rounded-full h-2">
                                    <div class="bg-primary rounded-full h-2" style="width:35%"></div>
                                </div>
                                <span class="text-xs text-slate-500 dark:text-slate-400 shrink-0">35%</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-slate-500 dark:text-slate-400">Apr 15, 2026</td>
                    </tr>
                    <tr class="bg-white dark:bg-slate-800 hover:bg-slate-50 dark:hover:bg-slate-700/50 transition-colors">
                        <td class="px-6 py-4 font-medium text-slate-900 dark:text-slate-100">API Integration</td>
                        <td class="px-6 py-4"><span class="badge badge-success-soft">Completed</span></td>
                        <td class="px-6 py-4">
                            <div class="flex -space-x-2">
                                <img src="https://ui-avatars.com/api/?name=B+C&background=00c950&color=fff&size=28" alt="BC" class="w-7 h-7 rounded-full ring-2 ring-white dark:ring-slate-800" />
                                <img src="https://ui-avatars.com/api/?name=A+M&background=615fff&color=fff&size=28" alt="AM" class="w-7 h-7 rounded-full ring-2 ring-white dark:ring-slate-800" />
                                <img src="https://ui-avatars.com/api/?name=D+L&background=0ea5e9&color=fff&size=28" alt="DL" class="w-7 h-7 rounded-full ring-2 ring-white dark:ring-slate-800" />
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-2">
                                <div class="flex-1 bg-slate-200 dark:bg-slate-700 rounded-full h-2">
                                    <div class="bg-primary rounded-full h-2" style="width:100%"></div>
                                </div>
                                <span class="text-xs text-slate-500 dark:text-slate-400 shrink-0">100%</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-slate-500 dark:text-slate-400">Mar 1, 2026</td>
                    </tr>
                    <tr class="bg-white dark:bg-slate-800 hover:bg-slate-50 dark:hover:bg-slate-700/50 transition-colors">
                        <td class="px-6 py-4 font-medium text-slate-900 dark:text-slate-100">Marketing Site</td>
                        <td class="px-6 py-4"><span class="badge badge-primary-soft">In Progress</span></td>
                        <td class="px-6 py-4">
                            <div class="flex -space-x-2">
                                <img src="https://ui-avatars.com/api/?name=C+H&background=f59e08&color=fff&size=28" alt="CH" class="w-7 h-7 rounded-full ring-2 ring-white dark:ring-slate-800" />
                                <img src="https://ui-avatars.com/api/?name=E+S&background=9333ea&color=fff&size=28" alt="ES" class="w-7 h-7 rounded-full ring-2 ring-white dark:ring-slate-800" />
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-2">
                                <div class="flex-1 bg-slate-200 dark:bg-slate-700 rounded-full h-2">
                                    <div class="bg-primary rounded-full h-2" style="width:58%"></div>
                                </div>
                                <span class="text-xs text-slate-500 dark:text-slate-400 shrink-0">58%</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-slate-500 dark:text-slate-400">May 5, 2026</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-main>
