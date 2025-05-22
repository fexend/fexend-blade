<?php
use function Laravel\Folio\name;
name('dashboard.dashboard-2');

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

    <!-- Overview Section -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-4">
        <div class="grid grid-cols-2 col-span-12 lg:col-span-8 gap-4">
            <div class="card">
                <h3>
                    $10,000
                    <span class="badge inline-flex badge-success-soft items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-up mr-1" width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <line x1="12" y1="19" x2="12" y2="5" />
                            <polyline points="5 12 12 5 19 12" />
                        </svg>
                        10%
                    </span>
                </h3>
                <p>Total Purchases</p>
            </div>
            <div class="card">
                <h3>
                    $8,000
                    <span class="badge inline-flex items-center badge-danger-soft">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-up mr-1" width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <line x1="12" y1="19" x2="12" y2="5" />
                            <polyline points="5 12 12 5 19 12" />
                        </svg>
                        20%
                    </span>
                </h3>
                <p>Total Spend</p>
            </div>
            <div class="card">
                <h3>
                    $500
                    <span class="badge inline-flex items-center badge-success-soft">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-up mr-1" width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <line x1="12" y1="19" x2="12" y2="5" />
                            <polyline points="5 12 12 5 19 12" />
                        </svg>
                        5%
                    </span>
                </h3>
                <p>Average Purchase Value</p>
            </div>
            <div class="card">
                <h3>
                    20
                    <span class="badge inline-flex items-center badge-warning-soft">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-up mr-1" width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <line x1="12" y1="19" x2="12" y2="5" />
                            <polyline points="5 12 12 5 19 12" />
                        </svg>
                        15%
                    </span>
                </h3>
                <p>Number of Suppliers</p>
            </div>
        </div>

        <!-- Recent Purchases -->
        <div class="card col-span-12 lg:col-span-4">
            <h3>Recent Purchases</h3>
            <div class="table-container max-h-36 overflow-y-auto">
                <table>
                    <thead>
                        <tr>
                            <th class="text-left py-2">PO Number</th>
                            <th class="text-left py-2">Status</th>
                            <th class="text-left py-2">Date</th>
                            <th class="text-left py-2">Supplier</th>
                            <th class="text-left py-2">Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="py-2">PO/20250213/0001</td>
                            <td class="py-2">
                                <span class="badge badge-success-soft">Approved</span>
                            </td>
                            <td class="py-2">February 5 2025</td>
                            <td class="py-2">Supplier A</td>
                            <td class="py-2">$500</td>
                        </tr>
                        <tr>
                            <td class="py-2">PO/20250213/0002</td>
                            <td class="py-2">
                                <span class="badge badge-warning-soft">Pending</span>
                            </td>
                            <td class="py-2">February 5 2025</td>
                            <td class="py-2">Supplier B</td>
                            <td class="py-2">$300</td>
                        </tr>
                        <tr>
                            <td class="py-2">PO/20250213/0003</td>
                            <td class="py-2">
                                <span class="badge badge-danger-soft">Rejected</span>
                            </td>
                            <td class="py-2">February 5 2025</td>
                            <td class="py-2">Supplier C</td>
                            <td class="py-2">$200</td>
                        </tr>
                        <tr>
                            <td class="py-2">PO/20250213/0004</td>
                            <td class="py-2">
                                <span class="badge badge-info-soft">Processing</span>
                            </td>
                            <td class="py-2">February 6 2025</td>
                            <td class="py-2">Supplier D</td>
                            <td class="py-2">$450</td>
                        </tr>
                        <tr>
                            <td class="py-2">PO/20250213/0005</td>
                            <td class="py-2">
                                <span class="badge badge-success-soft">Completed</span>
                            </td>
                            <td class="py-2">February 7 2025</td>
                            <td class="py-2">Supplier E</td>
                            <td class="py-2">$350</td>
                        </tr>
                        <tr>
                            <td class="py-2">PO/20250213/0005</td>
                            <td class="py-2">
                                <span class="badge badge-success-soft">Completed</span>
                            </td>
                            <td class="py-2">February 7 2025</td>
                            <td class="py-2">Supplier E</td>
                            <td class="py-2">$350</td>
                        </tr>
                        <tr>
                            <td class="py-2">PO/20250213/0005</td>
                            <td class="py-2">
                                <span class="badge badge-success-soft">Completed</span>
                            </td>
                            <td class="py-2">February 7 2025</td>
                            <td class="py-2">Supplier E</td>
                            <td class="py-2">$350</td>
                        </tr>
                        <tr>
                            <td class="py-2">PO/20250213/0005</td>
                            <td class="py-2">
                                <span class="badge badge-success-soft">Completed</span>
                            </td>
                            <td class="py-2">February 7 2025</td>
                            <td class="py-2">Supplier E</td>
                            <td class="py-2">$350</td>
                        </tr>
                        <tr>
                            <td class="py-2">PO/20250213/0005</td>
                            <td class="py-2">
                                <span class="badge badge-success-soft">Completed</span>
                            </td>
                            <td class="py-2">February 7 2025</td>
                            <td class="py-2">Supplier E</td>
                            <td class="py-2">$350</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-12 gap-4 mt-4">
        <div class="card col-span-12 lg:col-span-4">
            <h3>Budget vs. Actual Spend</h3>
            <div id="pieChart"></div>
        </div>

        <div class="card col-span-12 lg:col-span-8">
            <div id="lineChart"></div>
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
                initPieChart();
                initLineChart();
            });
        </script>

        <script>
            function initPieChart() {
                var options = {
                    chart: {
                        type: "donut",
                        height: "100%",
                        width: "100%",
                    },
                    series: [10000000, 1999921],
                    labels: ["Budget", "Spend"],
                    colors: [primaryColor, warningColor],
                };

                var chart = new ApexCharts(
                    document.querySelector("#pieChart"),
                    options,
                );
                chart.render();
            }

            function initLineChart() {
                var options = {
                    chart: {
                        type: "line",
                        height: "100%",
                        width: "100%",
                    },
                    series: [{
                            name: "2025 Purchase Amount",
                            data: [5000, 7000],
                        },
                        {
                            name: "2024 Purchase Amount",
                            data: [
                                4800, 6900, 7800, 5500, 7300, 8800, 8400, 9200, 10800, 10300,
                                9800, 11500,
                            ],
                        },
                        {
                            name: "2023 Purchase Amount",
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
