import "./bootstrap";
import "flowbite";
import { DataTable } from "simple-datatables";

import Alpine from "alpinejs";

window.Alpine = Alpine;
// Exponer DataTable al objeto window
window.simpleDatatables = { DataTable };

Alpine.start();