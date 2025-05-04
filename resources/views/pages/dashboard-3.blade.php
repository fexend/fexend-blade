<?php
use function Laravel\Folio\name;
name('dashboard.dashboard-3');

?>

<x-main :title="'Dashboard'">
    <div class="">
        <nav aria-label="Breadcrumb" class="breadcrumb">
            <h2 class="title">Dashboard</h2>
            <ol>
                <li>
                    <a href="/src/dashboard/dashboard.html">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        Dashboard
                    </a>
                </li>
            </ol>
        </nav>
    </div>

    <!-- Metrics Cards Row -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <!-- Stock Levels Card -->
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Stock Levels</h3>
                <div class="mt-4">
                    <p class="text-2xl font-bold">1,234</p>
                    <p class="text-sm text-gray-600 dark:text-gray-400">
                        Total Items in Stock
                    </p>
                    <div class="mt-2">
                        <span class="text-green-500">↑ 12%</span>
                        <span class="text-sm text-gray-600 dark:text-gray-400">vs last month</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Order Status Card -->
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Order Status</h3>
                <div class="mt-4">
                    <p class="text-2xl font-bold">89</p>
                    <p class="text-sm text-gray-600 dark:text-gray-400">
                        Pending Orders
                    </p>
                    <div class="mt-2">
                        <span class="text-red-500">↓ 3%</span>
                        <span class="text-sm text-gray-600 dark:text-gray-400">vs last week</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Warehouse Utilization Card -->
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Warehouse Utilization</h3>
                <div class="mt-4">
                    <p class="text-2xl font-bold">78%</p>
                    <p class="text-sm text-gray-600 dark:text-gray-400">
                        Space Utilized
                    </p>
                    <div class="mt-2">
                        <span class="text-yellow-500">→ 5%</span>
                        <span class="text-sm text-gray-600 dark:text-gray-400">capacity remaining</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Detailed Sections -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mt-4">
        <!-- Stock Movement Table -->
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Recent Stock Movement</h3>
                <div class="table-container max-h-56 overflow-y-auto hide-scroll">
                    <table class="table-hover">
                        <thead>
                            <tr>
                                <th>Item</th>
                                <th>Quantity</th>
                                <th>Type</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Product A</td>
                                <td>50</td>
                                <td>Inbound</td>
                                <td>2024-03-15</td>
                            </tr>
                            <tr>
                                <td>Product B</td>
                                <td>30</td>
                                <td>Outbound</td>
                                <td>2024-03-14</td>
                            </tr>
                            <tr>
                                <td>Product B</td>
                                <td>30</td>
                                <td>Outbound</td>
                                <td>2024-03-14</td>
                            </tr>
                            <tr>
                                <td>Product B</td>
                                <td>30</td>
                                <td>Outbound</td>
                                <td>2024-03-14</td>
                            </tr>
                            <tr>
                                <td>Product B</td>
                                <td>30</td>
                                <td>Outbound</td>
                                <td>2024-03-14</td>
                            </tr>
                            <tr>
                                <td>Product B</td>
                                <td>30</td>
                                <td>Outbound</td>
                                <td>2024-03-14</td>
                            </tr>
                            <tr>
                                <td>Product B</td>
                                <td>30</td>
                                <td>Outbound</td>
                                <td>2024-03-14</td>
                            </tr>
                            <tr>
                                <td>Product B</td>
                                <td>30</td>
                                <td>Outbound</td>
                                <td>2024-03-14</td>
                            </tr>
                            <tr>
                                <td>Product B</td>
                                <td>30</td>
                                <td>Outbound</td>
                                <td>2024-03-14</td>
                            </tr>
                            <tr>
                                <td>Product B</td>
                                <td>30</td>
                                <td>Outbound</td>
                                <td>2024-03-14</td>
                            </tr>
                            <tr>
                                <td>Product B</td>
                                <td>30</td>
                                <td>Outbound</td>
                                <td>2024-03-14</td>
                            </tr>
                            <tr>
                                <td>Product B</td>
                                <td>30</td>
                                <td>Outbound</td>
                                <td>2024-03-14</td>
                            </tr>
                            <tr>
                                <td>Product B</td>
                                <td>30</td>
                                <td>Outbound</td>
                                <td>2024-03-14</td>
                            </tr>
                            <tr>
                                <td>Product B</td>
                                <td>30</td>
                                <td>Outbound</td>
                                <td>2024-03-14</td>
                            </tr>
                            <tr>
                                <td>Product B</td>
                                <td>30</td>
                                <td>Outbound</td>
                                <td>2024-03-14</td>
                            </tr>
                            <tr>
                                <td>Product B</td>
                                <td>30</td>
                                <td>Outbound</td>
                                <td>2024-03-14</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Supplier Performance -->
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Supplier Performance</h3>
                <div class="table-container h-auto max-h-56 overflow-y-auto hide-scroll">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead>
                            <tr>
                                <th class="table-header">Supplier</th>
                                <th class="table-header">On-Time</th>
                                <th class="table-header">Quality</th>
                                <th class="table-header">Status</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                            <tr>
                                <td class="table-cell">Supplier A</td>
                                <td class="table-cell">95%</td>
                                <td class="table-cell">98%</td>
                                <td class="table-cell">
                                    <span class="badge badge-success-soft">Excellent</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-cell">Supplier B</td>
                                <td class="table-cell">82%</td>
                                <td class="table-cell">85%</td>
                                <td class="table-cell">
                                    <span class="badge badge-warning-soft">Good</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Analytics Section -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 mt-4">
        <!-- Sales Trends Chart -->
        <div class="card lg:col-span-2">
            <div class="card-body">
                <h3 class="card-title">Sales Trends</h3>
                <div id="lineChart"></div>
            </div>
        </div>

        <!-- Top Products -->
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Top Products</h3>
                <ul class="space-y-2 max-h-56 overflow-y-auto hide-scroll">
                    <li class="flex justify-between">
                        <span>Product A</span>
                        <span class="font-semibold">1,234 units</span>
                    </li>
                    <li class="flex justify-between">
                        <span>Product B</span>
                        <span class="font-semibold">987 units</span>
                    </li>
                    <li class="flex justify-between">
                        <span>Product C</span>
                        <span class="font-semibold">654 units</span>
                    </li>
                    <li class="flex justify-between">
                        <span>Product C</span>
                        <span class="font-semibold">654 units</span>
                    </li>
                    <li class="flex justify-between">
                        <span>Product C</span>
                        <span class="font-semibold">654 units</span>
                    </li>
                    <li class="flex justify-between">
                        <span>Product C</span>
                        <span class="font-semibold">654 units</span>
                    </li>
                    <li class="flex justify-between">
                        <span>Product C</span>
                        <span class="font-semibold">654 units</span>
                    </li>
                    <li class="flex justify-between">
                        <span>Product C</span>
                        <span class="font-semibold">654 units</span>
                    </li>
                    <li class="flex justify-between">
                        <span>Product C</span>
                        <span class="font-semibold">654 units</span>
                    </li>
                    <li class="flex justify-between">
                        <span>Product C</span>
                        <span class="font-semibold">654 units</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <x-slot name="scripts">
        <script>
            let primaryColor,
                secondaryColor,
                successColor,
                infoColor,
                dangerColor,
                warningColor;
            const getPrimaryColor = () => {
                primaryColor =
                    getComputedStyle(document.documentElement)
                    .getPropertyValue("--color-primary")
                    .trim() || "#0d6efd";
                secondaryColor =
                    getComputedStyle(document.documentElement)
                    .getPropertyValue("--color-secondary")
                    .trim() || "#6c757d";
                successColor =
                    getComputedStyle(document.documentElement)
                    .getPropertyValue("--color-success")
                    .trim() || "#198754";
                infoColor =
                    getComputedStyle(document.documentElement)
                    .getPropertyValue("--color-info")
                    .trim() || "#0dcaf0";
                dangerColor =
                    getComputedStyle(document.documentElement)
                    .getPropertyValue("--color-danger")
                    .trim() || "#dc3545";
                warningColor =
                    getComputedStyle(document.documentElement)
                    .getPropertyValue("--color-warning")
                    .trim() || "#ffc107";
            };

            document.addEventListener("DOMContentLoaded", function() {
                getPrimaryColor();
            });
        </script>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                initLineChart();
            });
        </script>

        <script>
            function initLineChart() {
                var options = {
                    chart: {
                        type: "line",
                        height: "100%",
                        width: "100%",
                    },
                    series: [{
                            name: "2025 Sales Amount",
                            data: [5000, 7000],
                        },
                        {
                            name: "2024 Sales Amount",
                            data: [
                                4800, 6900, 7800, 5500, 7300, 8800, 8400, 9200, 10800, 10300,
                                9800, 11500,
                            ],
                        },
                        {
                            name: "2023 Sales Amount",
                            data: [
                                4600, 6800, 7700, 5300, 7100, 8600, 8200, 9000, 10500, 10100,
                                9600, 11000,
                            ],
                        },
                    ],
                    xaxis: {
                        categories: [
                            "Jan",
                            "Feb",
                            "Mar",
                            "Apr",
                            "May",
                            "Jun",
                            "Jul",
                            "Aug",
                            "Sep",
                            "Oct",
                            "Nov",
                            "Dec",
                        ],
                    },
                    colors: [primaryColor, warningColor, dangerColor],
                    stroke: {
                        curve: "smooth",
                    },
                    tooltip: {
                        y: {
                            formatter: function(value) {
                                return "$" + value;
                            },
                        },
                    },
                };

                var chart = new ApexCharts(
                    document.querySelector("#lineChart"),
                    options,
                );
                chart.render();
            }
        </script>
    </x-slot>

</x-main>
