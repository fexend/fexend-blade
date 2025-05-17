import axios from "axios";
window.axios = axios;

window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

import Alpine from "alpinejs";
import { mask } from "@alpinejs/mask";
import { collapse } from "@alpinejs/collapse";
import flatpickr from "flatpickr";
import $ from "jquery";
import select2 from "select2";
import ApexCharts from "apexcharts";

import DataTable from "datatables.net-dt";

Alpine.plugin(mask);
Alpine.plugin(collapse);

window.Alpine = Alpine;

Alpine.start();

window.flatpickr = flatpickr;
window.$ = window.jQuery = $;

select2($);
window.select2 = select2;

window.DataTable = DataTable;
window.ApexCharts = ApexCharts;

import "./custom/draganddrop";
import "./custom/flatpickr";
import "./custom/select2";

window.debounce = (func, wait, immediate) => {
    let timeout;
    return function () {
        const context = this,
            args = arguments;
        const later = function () {
            timeout = null;
            if (!immediate) func.apply(context, args);
        };
        const callNow = immediate && !timeout;
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
        if (callNow) func.apply(context, args);
    };
};