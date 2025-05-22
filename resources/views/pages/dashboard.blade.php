<?php
use function Laravel\Folio\name;
name('dashboard');

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

    <div class="tab tab-bordered mt-4" x-data="{ activeTab: 'overview' }">
        <div class="tab-button">
            <nav aria-label="Tabs">
                <a href="#" @click="activeTab = 'overview'" x-bind:class="activeTab === 'overview' ? 'active' : ''" class="tab-link tab-link-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-menu-3">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M10 6h10" />
                        <path d="M4 12h16" />
                        <path d="M7 12h13" />
                        <path d="M4 18h10" />
                    </svg>
                    Overview
                </a>

                <a href="#" @click="activeTab = 'ads_overview'" x-bind:class="activeTab === 'ads_overview' ? 'active' : ''" class="tab-link tab-link-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-ad">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M3 5m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                        <path d="M7 15v-4a2 2 0 0 1 4 0v4" />
                        <path d="M7 13l4 0" />
                        <path d="M17 9v6h-1.5a1.5 1.5 0 1 1 1.5 -1.5" />
                    </svg>
                    Ads Overview
                </a>
            </nav>
        </div>

        <div class="tab-content">
            <div class="tab-item" x-transition x-show="activeTab === 'overview'">
                <div class="grid grid-cols-12 gap-4">
                    <div class="card col-span-12 md:col-span-6 lg:col-span-3 card-primary">
                        <div class="card-body whitespace-nowrap text-ellipsis overflow-x-hidden">
                            <h4>Total Revenue</h4>
                            <h2 class="flex items-center justify-start flex-wrap my-6 font-bold gap-2">
                                <span class="md:text-4xl">$125,000</span>
                                <span class="badge badge-success badge-rounded inline-flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-up mr-1" width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <line x1="12" y1="19" x2="12" y2="5" />
                                        <line x1="5" y1="12" x2="12" y2="5" />
                                        <line x1="19" y1="12" x2="12" y2="5" />
                                    </svg>
                                    +5%
                                </span>
                            </h2>
                            <p class="text-slate-300 font-light tracking-wider">
                                Revenue generated this month
                            </p>
                        </div>
                    </div>
                    <div class="card col-span-12 md:col-span-6 lg:col-span-3">
                        <div class="card-body whitespace-nowrap text-ellipsis overflow-x-hidden">
                            <h4>New Customers</h4>
                            <h2 class="flex items-center justify-start flex-wrap my-6 font-bold gap-2">
                                <span class="md:text-4xl">350</span>
                                <span class="badge badge-success badge-rounded inline-flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-up mr-1" width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <line x1="12" y1="19" x2="12" y2="5" />
                                        <line x1="5" y1="12" x2="12" y2="5" />
                                        <line x1="19" y1="12" x2="12" y2="5" />
                                    </svg>
                                    +5%
                                </span>
                            </h2>
                            <p class="text-slate-300 dark:text-slate-700 font-light tracking-wider">
                                Since Last Month
                            </p>
                        </div>
                    </div>

                    <div class="card col-span-12 md:col-span-6 lg:col-span-3">
                        <div class="card-body whitespace-nowrap text-ellipsis overflow-x-hidden">
                            <h4>Total Sales</h4>
                            <h2 class="flex items-center justify-start flex-wrap my-6 font-bold gap-2">
                                <span class="md:text-4xl">$75,000</span>
                                <span class="badge badge-danger badge-rounded inline-flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-down mr-1" width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <line x1="12" y1="5" x2="12" y2="19" />
                                        <line x1="5" y1="12" x2="12" y2="19" />
                                        <line x1="19" y1="12" x2="12" y2="19" />
                                    </svg>
                                    -3%
                                </span>
                            </h2>
                            <p class="text-slate-300 dark:text-slate-700 font-light tracking-wider">
                                Since Last Month
                            </p>
                        </div>
                    </div>

                    <div class="card col-span-12 md:col-span-6 lg:col-span-3">
                        <div class="card-body whitespace-nowrap text-ellipsis overflow-x-hidden">
                            <h4>Profit Margin</h4>
                            <h2 class="flex items-center justify-start flex-wrap my-6 font-bold gap-2">
                                <span class="md:text-4xl">15%</span>
                            </h2>
                            <p class="text-slate-300 dark:text-slate-700 font-light tracking-wider">
                                Since Last Month
                            </p>
                        </div>
                    </div>

                    <div class="card col-span-12 md:col-span-8">
                        <div class="card-body">
                            <div class="flex items-center justify-between mb-4">
                                <h4 class="font-semibold">Sales Overview</h4>
                                <div class="flex space-x-2" x-data="{ activeFilter: 'daily' }">
                                    <button class="badge badge-primary-soft cursor-pointer" :class="{ 'badge-primary': activeFilter==='daily' }" @click="activeFilter='daily'; updateLineChartFirstTab('daily')">
                                        Daily
                                    </button>
                                    <button class="badge badge-primary-soft cursor-pointer" :class="{ 'badge-primary': activeFilter==='weekly' }" @click="activeFilter='weekly'; updateLineChartFirstTab('weekly')">
                                        Weekly
                                    </button>
                                    <button class="badge badge-primary-soft cursor-pointer" :class="{ 'badge-primary': activeFilter==='monthly' }" @click="activeFilter='monthly'; updateLineChartFirstTab('monthly')">
                                        Monthly
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div id="lineChart"></div>
                    </div>

                    <div class="card col-span-12 md:col-span-4">
                        <div class="card-body">
                            <h4>Pie Chart</h4>
                            <p>Sales distribution for various products.</p>
                            <div id="pieChart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-item" x-transition x-show="activeTab === 'ads_overview'">
            <div class="grid gap-4 grid-cols-12">
                <div class="col-span-12 lg:col-span-8 h-full">
                    <div class="card h-full">
                        <div class="card-body h-full flex flex-col">
                            <h2>Engagement</h2>
                            <div id="engagementChart" class="flex-grow"></div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 lg:col-span-4 h-full">
                    <div class="card max-h-[500px] overflow-y-auto hide-scroll">
                        <div class="card-body flex flex-col">
                            <div class="flex-grow">
                                <h2>Demographic</h2>
                                <ul class="space-y-2 list-none">
                                    <li class="card-sm p-3">
                                        <div class="flex justify-between items-center">
                                            <h6 class="font-semibold">United States</h6>
                                            <span class="badge badge-success">+10%</span>
                                        </div>
                                        <p class="text-xs text-gray-500">
                                            Largest market in the region
                                        </p>
                                    </li>
                                    <li class="card-sm p-3">
                                        <div class="flex justify-between items-center">
                                            <h6 class="font-semibold">Canada</h6>
                                            <span class="badge badge-success">+10%</span>
                                        </div>
                                        <p class="text-xs text-gray-500">
                                            Rapidly growing economy
                                        </p>
                                    </li>
                                    <li class="card-sm p-3">
                                        <div class="flex justify-between items-center">
                                            <h6 class="font-semibold">United Kingdom</h6>
                                            <span class="badge badge-success">+10%</span>
                                        </div>
                                        <p class="text-xs text-gray-500">
                                            Stable and mature market
                                        </p>
                                    </li>
                                    <li class="card-sm p-3">
                                        <div class="flex justify-between items-center">
                                            <h6 class="font-semibold">Germany</h6>
                                            <span class="badge badge-success">+10%</span>
                                        </div>
                                        <p class="text-xs text-gray-500">
                                            Industrial and robust economy
                                        </p>
                                    </li>
                                    <li class="card-sm p-3">
                                        <div class="flex justify-between items-center">
                                            <h6 class="font-semibold">France</h6>
                                            <span class="badge badge-success">+10%</span>
                                        </div>
                                        <p class="text-xs text-gray-500">
                                            Diverse market trends
                                        </p>
                                    </li>
                                    <li class="card-sm p-3">
                                        <div class="flex justify-between items-center">
                                            <h6 class="font-semibold">Spain</h6>
                                            <span class="badge badge-success">+10%</span>
                                        </div>
                                        <p class="text-xs text-gray-500">
                                            Emerging growth market
                                        </p>
                                    </li>
                                    <li class="card-sm p-3">
                                        <div class="flex justify-between items-center">
                                            <h6 class="font-semibold">Italy</h6>
                                            <span class="badge badge-success">+10%</span>
                                        </div>
                                        <p class="text-xs text-gray-500">
                                            Consistent performance
                                        </p>
                                    </li>
                                    <li class="card-sm p-3">
                                        <div class="flex justify-between items-center">
                                            <h6 class="font-semibold">Australia</h6>
                                            <span class="badge badge-success">+10%</span>
                                        </div>
                                        <p class="text-xs text-gray-500">
                                            High consumer engagement
                                        </p>
                                    </li>
                                    <li class="card-sm p-3">
                                        <div class="flex justify-between items-center">
                                            <h6 class="font-semibold">Brazil</h6>
                                            <span class="badge badge-success">+10%</span>
                                        </div>
                                        <p class="text-xs text-gray-500">
                                            Expanding digital market
                                        </p>
                                    </li>
                                    <li class="card-sm p-3">
                                        <div class="flex justify-between items-center">
                                            <h6 class="font-semibold">India</h6>
                                            <span class="badge badge-success">+10%</span>
                                        </div>
                                        <p class="text-xs text-gray-500">
                                            Fastest growing segment
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-span-12 lg:col-span-4 grid grid-cols-2 gap-4">
                    <div class="card bg-gradient-to-bl from-primary to-secondary">
                        <div class="card-body">
                            <h4>Cost</h4>
                            <div class="flex items-center gap-2 my-4">
                                <h2 class="card-title">$199</h2>
                                <span class="badge badge-success badge-rounded inline-flex items-center">
                                    +5%
                                </span>
                            </div>
                            <p class="text-slate-700 dark:text-slate-300 text-sm">
                                Total Cost This Month
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h4>New Followers</h4>
                            <div class="flex items-center gap-2 my-4">
                                <h2 class="card-title">123</h2>
                                <span class="badge badge-success badge-rounded inline-flex items-center">
                                    +5%
                                </span>
                            </div>
                            <p class="text-slate-700 dark:text-slate-300 text-sm">
                                New Followers Gain
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h4>Total Engagement</h4>
                            <div class="flex items-center gap-2 my-4">
                                <h2 class="card-title">789</h2>
                                <span class="badge badge-success badge-rounded inline-flex items-center">
                                    +5%
                                </span>
                            </div>
                            <p class="text-slate-700 dark:text-slate-300 text-sm">
                                Total Engagement
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h4>Total Clicks</h4>
                            <div class="flex items-center gap-2 my-4">
                                <h2 class="card-title">101</h2>
                                <span class="badge badge-success badge-rounded inline-flex items-center">
                                    +5%
                                </span>
                            </div>
                            <p class="text-slate-700 dark:text-slate-300 text-sm">
                                Total Clicks this Month
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card col-span-12 lg:col-span-4">
                    <div class="card-body">
                        <div id="radialBarChart" style="height: 350px"></div>
                    </div>
                </div>
                <div class="card col-span-12 lg:col-span-4">
                    <h4>Social Engagement</h4>
                    <div id="horizontalBarChart"></div>
                </div>
            </div>
        </div>
    </div>
    <x-slot name="scripts">
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
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
                initChart();
            });
        </script>

        <!-- FIRST TAB CHART -->
        <script>
            let barChartFirstTab;

            function initBarChartFirstTab(data, labels) {
                const options = {
                    chart: {
                        type: "bar",
                        height: 350,
                        toolbar: {
                            show: false
                        },
                    },
                    plotOptions: {
                        bar: {
                            borderRadius: 8,
                        },
                    },
                    colors: [primaryColor],
                    series: [{
                        name: "Sales",
                        data: data,
                    }, ],
                    xaxis: {
                        categories: labels,
                    },
                    yaxis: {
                        title: {
                            text: "Sales",
                        },
                    },
                    tooltip: {
                        y: {
                            formatter: function(val) {
                                return "$" + val + "k";
                            },
                        },
                    },
                };
                barChartFirstTab = new ApexCharts(
                    document.querySelector("#lineChart"),
                    options,
                );
                barChartFirstTab.render();
            }

            function initPieChartFirstTab() {
                const pieChartOptions = {
                    chart: {
                        type: "pie",
                        height: 350,
                    },
                    series: [44, 55, 13, 43, 22],
                    labels: [
                        "Product A",
                        "Product B",
                        "Product C",
                        "Product D",
                        "Product E",
                    ],
                    colors: [
                        primaryColor,
                        warningColor,
                        infoColor,
                        dangerColor,
                        successColor,
                    ],
                    tooltip: {
                        y: {
                            formatter: function(val) {
                                return "$" + val + "k";
                            },
                        },
                    },
                };
                const pieChart = new ApexCharts(
                    document.querySelector("#pieChart"),
                    pieChartOptions,
                );
                pieChart.render();
            }

            function updateLineChartFirstTab(filter) {
                let newData, newLabels;
                switch (filter) {
                    case "daily":
                        newData = [10, 15, 14, 20, 25, 22, 30];
                        newLabels = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
                        break;
                    case "weekly":
                        newData = [70, 75, 80, 90, 85, 95, 100];
                        newLabels = [
                            "Week 1",
                            "Week 2",
                            "Week 3",
                            "Week 4",
                            "Week 5",
                            "Week 6",
                            "Week 7",
                        ];
                        break;
                    case "monthly":
                        newData = [
                            300, 320, 310, 330, 340, 360, 380, 370, 390, 400, 420, 410,
                        ];
                        newLabels = [
                            "January",
                            "February",
                            "March",
                            "April",
                            "May",
                            "June",
                            "July",
                            "August",
                            "September",
                            "October",
                            "November",
                            "December",
                        ];
                        break;
                    default:
                        newData = [10, 15, 14, 20, 25, 22, 30];
                        newLabels = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
                }
                barChartFirstTab.updateSeries([{
                    data: newData
                }]);
                barChartFirstTab.updateOptions({
                    xaxis: {
                        categories: newLabels,
                    },
                });
            }
        </script>
        <!-- FIRST TAB CHART -->

        <!-- SECOND TAB CHART -->
        <script>
            function initLineChartSecondTab() {
                var engagementOptions = {
                    chart: {
                        height: 400,
                        type: "line",
                        toolbar: {
                            show: false
                        },
                    },
                    series: [{
                            name: "TikTok",
                            data: [30, 40, 35, 50, 49, 60, 70]
                        },
                        {
                            name: "Instagram",
                            data: [20, 30, 25, 40, 35, 50, 60]
                        },
                        {
                            name: "Facebook",
                            data: [15, 25, 20, 30, 28, 40, 45]
                        },
                        {
                            name: "Twitter",
                            data: [10, 20, 15, 25, 22, 30, 35]
                        },
                    ],
                    xaxis: {
                        categories: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
                    },
                    colors: [primaryColor, warningColor, infoColor, dangerColor],
                    stroke: {
                        curve: "smooth",
                    },
                    tooltip: {
                        shared: true,
                        intersect: false,
                        y: {
                            formatter: function(val) {
                                return val;
                            },
                        },
                    },
                };
                var engagementChart = new ApexCharts(
                    document.querySelector("#engagementChart"),
                    engagementOptions,
                );
                engagementChart.render();
            }

            function initRadialChartSecondTab() {
                var options = {
                    chart: {
                        height: 350,
                        type: "radialBar",
                    },
                    series: [70, 90, 80, 74],
                    plotOptions: {
                        radialBar: {
                            hollow: {
                                size: "70%",
                            },
                            dataLabels: {
                                name: {
                                    fontSize: "22px",
                                },
                                value: {
                                    fontSize: "16px",
                                },
                                total: {
                                    show: true,
                                    label: "Total",
                                    formatter: function() {
                                        return "70%";
                                    },
                                },
                            },
                        },
                    },
                    labels: ["Completion", "Engagement", "Revenue", "Profit"],
                    colors: [
                        primaryColor || "#0d6efd",
                        secondaryColor || "#6c757d",
                        successColor,
                        infoColor,
                    ],
                };

                var chart = new ApexCharts(
                    document.querySelector("#radialBarChart"),
                    options,
                );
                chart.render();
            }

            function initBarChartSecondTab() {
                var options = {
                    chart: {
                        type: "bar",
                        height: 350,
                    },
                    plotOptions: {
                        bar: {
                            horizontal: true,
                            barHeight: "50%",
                            borderRadius: 4,
                        },
                    },
                    dataLabels: {
                        enabled: false,
                    },
                    series: [{
                        name: "Engagement",
                        data: [80, 90, 70, 85, 75],
                    }, ],
                    xaxis: {
                        categories: [
                            "Facebook",
                            "Instagram",
                            "Twitter",
                            "LinkedIn",
                            "YouTube",
                        ],
                    },
                    colors: [primaryColor || "#0d6efd"],
                };
                var horizontalBarChart = new ApexCharts(
                    document.querySelector("#horizontalBarChart"),
                    options,
                );
                horizontalBarChart.render();
            }
        </script>
        <!-- SECOND TAB CHART -->

        <script>
            const initChart = () => {
                initBarChartFirstTab(
                    [10, 15, 14, 20, 25, 22, 30],
                    ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
                );
                initPieChartFirstTab();

                initLineChartSecondTab();
                initRadialChartSecondTab();
                initBarChartSecondTab();
            };
        </script>
    </x-slot>
</x-main>
