# 🌟 Flowbite DataTables Basic Usage

Este proyecto utiliza **Laravel 11** con **Flowbite**, **Simple DataTables**, **Tailwind CSS**, y un enfoque moderno con soporte para **modo oscuro** persistente. A continuación, encontrarás todas las instrucciones necesarias para configurar y empezar a trabajar.

---

## 📦 Instalación del Proyecto

1. Crea un nuevo proyecto de Laravel con Breeze, configurado para **Blade**, modo oscuro y usando SQLite:

   ```bash
   laravel new --breeze --stack blade --dark --pest --database sqlite
   ```

2. Instala las dependencias de Flowbite y Simple DataTables:

   ```bash
   npm install flowbite && npm install simple-datatables --save
   ```

---

## 🔧 Configuración

### 1. Configura `tailwind.config.js`

Agrega el plugin de Flowbite con soporte para DataTables:

```javascript
plugins: [
  require('flowbite/plugin')({
      datatables: true,
  }),
  // ... otros plugins
]
```

### 2. Configura `resources/js/app.js`

Importa las dependencias necesarias y expón el objeto `DataTable` al objeto `window`:

```javascript
import "./bootstrap";
import "flowbite";
import { DataTable } from "simple-datatables";

import Alpine from "alpinejs";

window.Alpine = Alpine;
// Exponer DataTable al objeto window
window.simpleDatatables = { DataTable };

Alpine.start();
```

---

## 📋 Uso de la Tabla

Para utilizar las DataTables en tu proyecto, asegúrate de incluir una tabla con el siguiente ID o uno que coincida con el script:

```html
<table id="default-table">
  <!-- Aquí van tus datos -->
</table>
```

Luego, agrega el siguiente script para inicializar la tabla:

```html
<script>
  document.addEventListener('DOMContentLoaded', function() {
    if (document.getElementById("default-table") && typeof window.simpleDatatables !== 'undefined') {
      const dataTable = new window.simpleDatatables.DataTable("#default-table", {
        searchable: true,
        perPageSelect: false
      });
    }
  });
</script>
```

---

## 🌑 Persistencia del Modo Oscuro

Si deseas que el modo oscuro persista, asegúrate de usar la clase `dark:` de Tailwind en la etiqueta `<html>`:

```html
<html class="dark">
```

Esto habilitará las características del modo oscuro de Tailwind CSS.

---

## 🚀 ¡Listo para Empezar!

Con estas instrucciones, tendrás un proyecto funcional utilizando Flowbite DataTables en Laravel 11, con un diseño moderno y soporte para modo oscuro. 🎉

Si tienes dudas o sugerencias, ¡no dudes en contribuir! 😄

