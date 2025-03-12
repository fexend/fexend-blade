import "./custom/flatpickr";
import "./custom/select2";
import "./custom/draganddrop";

import axios from "axios";
window.axios = axios;

window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

import Alpine from "alpinejs";
import { mask } from "@alpinejs/mask";
import { collapse } from "@alpinejs/collapse";
import flatpickr from "flatpickr";
import $ from "jquery";
import select2 from "select2";

Alpine.plugin(mask);
Alpine.plugin(collapse);

window.Alpine = Alpine;

Alpine.start();

window.flatpickr = flatpickr;
window.$ = window.jQuery = $;

select2($);
window.select2 = select2;
