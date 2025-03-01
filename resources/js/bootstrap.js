import axios from "axios";
window.axios = axios;

window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

// Import Alpine.js
import Alpine from "alpinejs";
import { mask } from "@alpinejs/mask";
import { collapse } from "@alpinejs/collapse";

Alpine.plugin(mask);
Alpine.plugin(collapse);

window.Alpine = Alpine;

Alpine.start();
