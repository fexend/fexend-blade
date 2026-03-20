<?php
use function Laravel\Folio\name;
name('dashboard');
?>

<x-main title="Dashboard">
    <x-slot name="scripts">
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    </x-slot>

    <x-breadcrumb>
        <x-breadcrumb-item title="Dashboard" active></x-breadcrumb-item>
    </x-breadcrumb>

    <h1 class="text-2xl font-bold text-slate-900 dark:text-slate-100 mb-6">Dashboard</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-4 mb-6">
        <!-- Total Users -->
        <div class="stat-card stat-card-hover">
            <div class="flex items-start justify-between">
                <div>
                    <p class="stat-card-label">Total Users</p>
                    <p class="stat-card-value mt-1">24,521</p>
                    <span class="stat-card-trend stat-card-trend-up">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 17l4 -4l4 4l4 -4l4 -4" />
                            <path d="M14 7h7v7" />
                        </svg>
                        +12% vs last month
                    </span>
                </div>
                <div class="stat-card-icon stat-card-icon-primary">
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

        <!-- Revenue -->
        <div class="stat-card stat-card-hover">
            <div class="flex items-start justify-between">
                <div>
                    <p class="stat-card-label">Revenue</p>
                    <p class="stat-card-value mt-1">$48,295</p>
                    <span class="stat-card-trend stat-card-trend-up">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 17l4 -4l4 4l4 -4l4 -4" />
                            <path d="M14 7h7v7" />
                        </svg>
                        +8.2% vs last month
                    </span>
                </div>
                <div class="stat-card-icon stat-card-icon-success">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                        <path d="M14.8 9a2 2 0 0 0 -1.8 -1h-2a2 2 0 1 0 0 4h2a2 2 0 1 0 0 4h-2a2 2 0 0 1 -1.8 -1" />
                        <path d="M12 7v10" />
                    </svg>
                </div>
            </div>
        </div>

        <!-- Orders -->
        <div class="stat-card stat-card-hover">
            <div class="flex items-start justify-between">
                <div>
                    <p class="stat-card-label">Orders</p>
                    <p class="stat-card-value mt-1">1,893</p>
                    <span class="stat-card-trend stat-card-trend-down">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 7l4 4l4 -4l4 4l4 4" />
                            <path d="M14 17h7v-7" />
                        </svg>
                        -3.1% vs last month
                    </span>
                </div>
                <div class="stat-card-icon stat-card-icon-danger">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                        <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                        <path d="M1 2h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2 -1.61l1.6 -8.39h-19.32" />
                    </svg>
                </div>
            </div>
        </div>

        <!-- Growth Rate -->
        <div class="stat-card stat-card-hover">
            <div class="flex items-start justify-between">
                <div>
                    <p class="stat-card-label">Growth Rate</p>
                    <p class="stat-card-value mt-1">18.6%</p>
                    <span class="stat-card-trend stat-card-trend-up">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 17l4 -4l4 4l4 -4l4 -4" />
                            <path d="M14 7h7v7" />
                        </svg>
                        +2.4% vs last month
                    </span>
                </div>
                <div class="stat-card-icon stat-card-icon-warning">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M3 17l4 -4l4 4l4 -4l4 -4" />
                        <path d="M14 7h7v7" />
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 mb-6">
        <!-- Area Chart: Revenue Overview -->
        <div class="card col-span-1 lg:col-span-2">
            <div class="p-6 pb-2">
                <h2 class="text-lg font-semibold text-slate-900 dark:text-slate-100">Revenue Overview</h2>
                <p class="text-sm text-slate-500 dark:text-slate-400">Monthly revenue for the current year</p>
            </div>
            <div
                class="px-4 pb-4"
                x-init="
                    new ApexCharts($el, {
                        chart: { type: 'area', height: 280, toolbar: { show: false }, fontFamily: 'Lexend, sans-serif' },
                        series: [{ name: 'Revenue', data: [31000, 40000, 28000, 51000, 42000, 60000, 53000, 71000, 65000, 78000, 69000, 88000] }],
                        xaxis: { categories: ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'] },
                        colors: ['#615fff'],
                        fill: { type: 'gradient', gradient: { shadeIntensity: 1, opacityFrom: 0.45, opacityTo: 0.05 } },
                        stroke: { curve: 'smooth', width: 2 },
                        dataLabels: { enabled: false },
                        grid: { borderColor: '#e2e8f0', strokeDashArray: 4 },
                        tooltip: { y: { formatter: v => '$' + v.toLocaleString() } }
                    }).render()
                "
            ></div>
        </div>

        <!-- Donut Chart: Sales by Category -->
        <div class="card">
            <div class="p-6 pb-2">
                <h2 class="text-lg font-semibold text-slate-900 dark:text-slate-100">Sales by Category</h2>
                <p class="text-sm text-slate-500 dark:text-slate-400">Breakdown by product category</p>
            </div>
            <div
                class="px-4 pb-4"
                x-init="
                    new ApexCharts($el, {
                        chart: { type: 'donut', height: 280, fontFamily: 'Lexend, sans-serif' },
                        series: [44, 28, 18, 10],
                        labels: ['Electronics', 'Clothing', 'Food', 'Other'],
                        colors: ['#615fff', '#9333ea', '#00c950', '#f59e08'],
                        legend: { position: 'bottom' },
                        dataLabels: { enabled: false },
                        plotOptions: { pie: { donut: { size: '65%' } } }
                    }).render()
                "
            ></div>
        </div>
    </div>

    <!-- Recent Orders -->
    <div class="card card-table">
        <div class="p-6 pb-4 border-b border-slate-200 dark:border-slate-700">
            <h2 class="text-lg font-semibold text-slate-900 dark:text-slate-100">Recent Orders</h2>
            <p class="text-sm text-slate-500 dark:text-slate-400">Latest customer orders</p>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left">
                <thead class="bg-slate-50 dark:bg-slate-700/50 text-slate-600 dark:text-slate-400 uppercase text-xs">
                    <tr>
                        <th class="px-6 py-3 font-medium">Order ID</th>
                        <th class="px-6 py-3 font-medium">Customer</th>
                        <th class="px-6 py-3 font-medium">Amount</th>
                        <th class="px-6 py-3 font-medium">Status</th>
                        <th class="px-6 py-3 font-medium">Date</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-200 dark:divide-slate-700">
                    <tr class="bg-white dark:bg-slate-800 hover:bg-slate-50 dark:hover:bg-slate-700/50 transition-colors">
                        <td class="px-6 py-4 font-medium text-slate-900 dark:text-slate-100">#ORD-7821</td>
                        <td class="px-6 py-4 text-slate-600 dark:text-slate-300">Sarah Johnson</td>
                        <td class="px-6 py-4 text-slate-600 dark:text-slate-300">$245.00</td>
                        <td class="px-6 py-4"><span class="badge badge-success-soft">Completed</span></td>
                        <td class="px-6 py-4 text-slate-500 dark:text-slate-400">Mar 10, 2026</td>
                    </tr>
                    <tr class="bg-white dark:bg-slate-800 hover:bg-slate-50 dark:hover:bg-slate-700/50 transition-colors">
                        <td class="px-6 py-4 font-medium text-slate-900 dark:text-slate-100">#ORD-7820</td>
                        <td class="px-6 py-4 text-slate-600 dark:text-slate-300">Michael Chen</td>
                        <td class="px-6 py-4 text-slate-600 dark:text-slate-300">$1,120.50</td>
                        <td class="px-6 py-4"><span class="badge badge-warning-soft">Pending</span></td>
                        <td class="px-6 py-4 text-slate-500 dark:text-slate-400">Mar 10, 2026</td>
                    </tr>
                    <tr class="bg-white dark:bg-slate-800 hover:bg-slate-50 dark:hover:bg-slate-700/50 transition-colors">
                        <td class="px-6 py-4 font-medium text-slate-900 dark:text-slate-100">#ORD-7819</td>
                        <td class="px-6 py-4 text-slate-600 dark:text-slate-300">Emily Rodriguez</td>
                        <td class="px-6 py-4 text-slate-600 dark:text-slate-300">$89.99</td>
                        <td class="px-6 py-4"><span class="badge badge-success-soft">Completed</span></td>
                        <td class="px-6 py-4 text-slate-500 dark:text-slate-400">Mar 9, 2026</td>
                    </tr>
                    <tr class="bg-white dark:bg-slate-800 hover:bg-slate-50 dark:hover:bg-slate-700/50 transition-colors">
                        <td class="px-6 py-4 font-medium text-slate-900 dark:text-slate-100">#ORD-7818</td>
                        <td class="px-6 py-4 text-slate-600 dark:text-slate-300">David Kim</td>
                        <td class="px-6 py-4 text-slate-600 dark:text-slate-300">$432.00</td>
                        <td class="px-6 py-4"><span class="badge badge-danger-soft">Cancelled</span></td>
                        <td class="px-6 py-4 text-slate-500 dark:text-slate-400">Mar 9, 2026</td>
                    </tr>
                    <tr class="bg-white dark:bg-slate-800 hover:bg-slate-50 dark:hover:bg-slate-700/50 transition-colors">
                        <td class="px-6 py-4 font-medium text-slate-900 dark:text-slate-100">#ORD-7817</td>
                        <td class="px-6 py-4 text-slate-600 dark:text-slate-300">Lisa Thompson</td>
                        <td class="px-6 py-4 text-slate-600 dark:text-slate-300">$675.25</td>
                        <td class="px-6 py-4"><span class="badge badge-warning-soft">Pending</span></td>
                        <td class="px-6 py-4 text-slate-500 dark:text-slate-400">Mar 8, 2026</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-main>
