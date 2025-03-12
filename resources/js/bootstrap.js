import axios from "axios";
window.axios = axios;

window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

// Import Alpine.js
import Alpine from "alpinejs";
import { mask } from "@alpinejs/mask";
import { collapse } from "@alpinejs/collapse";
import flatpickr from "flatpickr";
import "flatpickr/dist/flatpickr.min.css";
import $ from "jquery";
import select2 from "select2";
import "select2/dist/css/select2.min.css";

Alpine.plugin(mask);
Alpine.plugin(collapse);

window.Alpine = Alpine;

Alpine.start();

window.flatpickr = flatpickr;
window.$ = window.jQuery = $;

select2($);
window.select2 = select2;

import "./custom/flatpickr";
import "./custom/select2";
