<?php
use function Laravel\Folio\name;
name('dashboard.dashboard-3');
?>

<x-main title="Dashboard 3">
    <x-slot name="scripts">
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    </x-slot>

    <x-breadcrumb>
        <x-breadcrumb-item :href="route('dashboard')" title="Dashboard"></x-breadcrumb-item>
        <x-breadcrumb-item title="Dashboard 3" active></x-breadcrumb-item>
    </x-breadcrumb>

    <h1 class="text-2xl font-bold text-slate-900 dark:text-slate-100 mb-6">Dashboard 3</h1>

    <!-- Colored Stat Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-4 mb-6">
        <!-- Total Sales -->
        <div class="stat-card stat-card-primary">
            <div class="flex items-start justify-between">
                <div>
                    <p class="stat-card-label">Total Sales</p>
                    <p class="stat-card-value mt-1">$92,400</p>
                </div>
                <div class="stat-card-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                        <path d="M14.8 9a2 2 0 0 0 -1.8 -1h-2a2 2 0 1 0 0 4h2a2 2 0 1 0 0 4h-2a2 2 0 0 1 -1.8 -1" />
                        <path d="M12 7v10" />
                    </svg>
                </div>
            </div>
        </div>

        <!-- New Customers -->
        <div class="stat-card stat-card-success">
            <div class="flex items-start justify-between">
                <div>
                    <p class="stat-card-label">New Customers</p>
                    <p class="stat-card-value mt-1">1,284</p>
                </div>
                <div class="stat-card-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                        <path d="M16 19h6" />
                        <path d="M19 16v6" />
                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4" />
                    </svg>
                </div>
            </div>
        </div>

        <!-- Refunds -->
        <div class="stat-card stat-card-danger">
            <div class="flex items-start justify-between">
                <div>
                    <p class="stat-card-label">Refunds</p>
                    <p class="stat-card-value mt-1">43</p>
                </div>
                <div class="stat-card-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M9 14l-4 -4l4 -4" />
                        <path d="M5 10h11a4 4 0 1 1 0 8h-1" />
                    </svg>
                </div>
            </div>
        </div>

        <!-- Conversion Rate -->
        <div class="stat-card stat-card-info">
            <div class="flex items-start justify-between">
                <div>
                    <p class="stat-card-label">Conversion Rate</p>
                    <p class="stat-card-value mt-1">3.6%</p>
                </div>
                <div class="stat-card-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M3 17l4 -4l4 4l4 -4l4 -4" />
                        <path d="M14 7h7v7" />
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Sales Overview Line Chart -->
    <div class="card mb-6">
        <div class="p-6 pb-2">
            <h2 class="text-lg font-semibold text-slate-900 dark:text-slate-100">Sales Overview</h2>
            <p class="text-sm text-slate-500 dark:text-slate-400">This year vs last year monthly sales</p>
        </div>
        <div
            class="px-4 pb-4"
            x-init="new ApexCharts($el, {
                chart: { type: 'line', height: 300, toolbar: { show: false }, fontFamily: 'Lexend, sans-serif' },
                series: [
                    { name: 'This Year', data: [42000,55000,38000,67000,72000,58000,81000,76000,89000,94000,87000,92000] },
                    { name: 'Last Year', data: [31000,42000,35000,51000,60000,48000,65000,61000,72000,78000,71000,80000] }
                ],
                xaxis: { categories: ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'] },
                colors: ['#615fff','#9333ea'],
                stroke: { curve: 'smooth', width: 2 },
                dataLabels: { enabled: false },
                grid: { borderColor: '#e2e8f0', strokeDashArray: 4 },
                legend: { position: 'top' },
                tooltip: { y: { formatter: v => '$' + v.toLocaleString() } }
            }).render()"
        ></div>
    </div>

    <!-- Products + Transactions Row -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
        <!-- Top Products -->
        <div class="card p-5">
            <h2 class="text-lg font-semibold text-slate-900 dark:text-slate-100 mb-4">Top Products</h2>
            <ul class="space-y-3">
                <li class="flex items-center gap-3">
                    <div class="flex-1 min-w-0">
                        <div class="flex items-center justify-between mb-1">
                            <div class="flex items-center gap-2">
                                <span class="text-sm font-medium text-slate-900 dark:text-slate-100">Pro Dashboard Kit</span>
                                <span class="badge badge-primary-soft">UI Kit</span>
                            </div>
                            <span class="text-sm font-semibold text-slate-900 dark:text-slate-100">$24,800</span>
                        </div>
                        <div class="bg-slate-200 dark:bg-slate-700 rounded-full h-1.5">
                            <div class="bg-primary rounded-full h-1.5" style="width:82%"></div>
                        </div>
                    </div>
                </li>
                <li class="flex items-center gap-3">
                    <div class="flex-1 min-w-0">
                        <div class="flex items-center justify-between mb-1">
                            <div class="flex items-center gap-2">
                                <span class="text-sm font-medium text-slate-900 dark:text-slate-100">Analytics Plugin</span>
                                <span class="badge badge-success-soft">Plugin</span>
                            </div>
                            <span class="text-sm font-semibold text-slate-900 dark:text-slate-100">$18,350</span>
                        </div>
                        <div class="bg-slate-200 dark:bg-slate-700 rounded-full h-1.5">
                            <div class="bg-success rounded-full h-1.5" style="width:61%"></div>
                        </div>
                    </div>
                </li>
                <li class="flex items-center gap-3">
                    <div class="flex-1 min-w-0">
                        <div class="flex items-center justify-between mb-1">
                            <div class="flex items-center gap-2">
                                <span class="text-sm font-medium text-slate-900 dark:text-slate-100">Component Library</span>
                                <span class="badge badge-warning-soft">Library</span>
                            </div>
                            <span class="text-sm font-semibold text-slate-900 dark:text-slate-100">$15,920</span>
                        </div>
                        <div class="bg-slate-200 dark:bg-slate-700 rounded-full h-1.5">
                            <div class="bg-warning rounded-full h-1.5" style="width:53%"></div>
                        </div>
                    </div>
                </li>
                <li class="flex items-center gap-3">
                    <div class="flex-1 min-w-0">
                        <div class="flex items-center justify-between mb-1">
                            <div class="flex items-center gap-2">
                                <span class="text-sm font-medium text-slate-900 dark:text-slate-100">Icon Pack Premium</span>
                                <span class="badge badge-info-soft">Icons</span>
                            </div>
                            <span class="text-sm font-semibold text-slate-900 dark:text-slate-100">$11,200</span>
                        </div>
                        <div class="bg-slate-200 dark:bg-slate-700 rounded-full h-1.5">
                            <div class="bg-info rounded-full h-1.5" style="width:37%"></div>
                        </div>
                    </div>
                </li>
                <li class="flex items-center gap-3">
                    <div class="flex-1 min-w-0">
                        <div class="flex items-center justify-between mb-1">
                            <div class="flex items-center gap-2">
                                <span class="text-sm font-medium text-slate-900 dark:text-slate-100">Email Templates</span>
                                <span class="badge badge-danger-soft">Templates</span>
                            </div>
                            <span class="text-sm font-semibold text-slate-900 dark:text-slate-100">$8,430</span>
                        </div>
                        <div class="bg-slate-200 dark:bg-slate-700 rounded-full h-1.5">
                            <div class="bg-danger rounded-full h-1.5" style="width:28%"></div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <!-- Recent Transactions -->
        <div class="card p-5">
            <h2 class="text-lg font-semibold text-slate-900 dark:text-slate-100 mb-4">Recent Transactions</h2>
            <ul class="space-y-3">
                <li class="flex items-center gap-3">
                    <div class="w-9 h-9 rounded-full bg-success/10 flex items-center justify-center shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-success">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 5l0 14" />
                            <path d="M16 9l-4 -4" />
                            <path d="M8 9l4 -4" />
                        </svg>
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-medium text-slate-900 dark:text-slate-100">Payment received from Sarah J.</p>
                        <p class="text-xs text-slate-500 dark:text-slate-400">Mar 11, 2026</p>
                    </div>
                    <span class="text-sm font-semibold text-success shrink-0">+$245.00</span>
                </li>
                <li class="flex items-center gap-3">
                    <div class="w-9 h-9 rounded-full bg-danger/10 flex items-center justify-center shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-danger">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 5l0 14" />
                            <path d="M16 15l-4 4" />
                            <path d="M8 15l4 4" />
                        </svg>
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-medium text-slate-900 dark:text-slate-100">Refund issued to Michael C.</p>
                        <p class="text-xs text-slate-500 dark:text-slate-400">Mar 10, 2026</p>
                    </div>
                    <span class="text-sm font-semibold text-danger shrink-0">-$89.99</span>
                </li>
                <li class="flex items-center gap-3">
                    <div class="w-9 h-9 rounded-full bg-success/10 flex items-center justify-center shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-success">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 5l0 14" />
                            <path d="M16 9l-4 -4" />
                            <path d="M8 9l4 -4" />
                        </svg>
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-medium text-slate-900 dark:text-slate-100">Subscription renewal — Emily R.</p>
                        <p class="text-xs text-slate-500 dark:text-slate-400">Mar 10, 2026</p>
                    </div>
                    <span class="text-sm font-semibold text-success shrink-0">+$120.00</span>
                </li>
                <li class="flex items-center gap-3">
                    <div class="w-9 h-9 rounded-full bg-success/10 flex items-center justify-center shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-success">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 5l0 14" />
                            <path d="M16 9l-4 -4" />
                            <path d="M8 9l4 -4" />
                        </svg>
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-medium text-slate-900 dark:text-slate-100">New order — David K.</p>
                        <p class="text-xs text-slate-500 dark:text-slate-400">Mar 9, 2026</p>
                    </div>
                    <span class="text-sm font-semibold text-success shrink-0">+$432.00</span>
                </li>
                <li class="flex items-center gap-3">
                    <div class="w-9 h-9 rounded-full bg-danger/10 flex items-center justify-center shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-danger">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 5l0 14" />
                            <path d="M16 15l-4 4" />
                            <path d="M8 15l4 4" />
                        </svg>
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-medium text-slate-900 dark:text-slate-100">Chargeback — Lisa T.</p>
                        <p class="text-xs text-slate-500 dark:text-slate-400">Mar 8, 2026</p>
                    </div>
                    <span class="text-sm font-semibold text-danger shrink-0">-$675.25</span>
                </li>
                <li class="flex items-center gap-3">
                    <div class="w-9 h-9 rounded-full bg-success/10 flex items-center justify-center shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-success">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 5l0 14" />
                            <path d="M16 9l-4 -4" />
                            <path d="M8 9l4 -4" />
                        </svg>
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-medium text-slate-900 dark:text-slate-100">Upgrade plan — James W.</p>
                        <p class="text-xs text-slate-500 dark:text-slate-400">Mar 7, 2026</p>
                    </div>
                    <span class="text-sm font-semibold text-success shrink-0">+$199.00</span>
                </li>
            </ul>
        </div>
    </div>
</x-main>
