# Taller 1: Frontend — Florería "Flor & Vida"

## Descripción del Proyecto
El proyecto implementa la interfaz web interactiva para el sistema de gestión de la florería **"Flor & Vida"**. La solución está construida íntegramente en el cliente utilizando tecnologías estándar de desarrollo web, todo en un único archivo `index.html`.

## Tecnologías Utilizadas
* **HTML5:** Estructura semántica de las vistas, formularios y navegación.
* **CSS3:** Diseño responsivo con variables, estilos personalizados y adaptabilidad multidispositivo.
* **JavaScript (ES6+):** Enrutador dinámico basado en hash (`window.location.hash`), manipulación del DOM, validaciones de formularios y control de validación de RUT chileno.

## Pantallas e Interfaz Implementadas
1. **Catálogo y Inicio:** Vista principal con listado de arreglos florales, buscador en tiempo real y filtrado por categorías u ofertas.
2. **Proceso de Pago y Registro:** Formulario interactivo con validaciones estrictas (RUT, correo electrónico, teléfono) y simulación de medios de pago.
3. **Panel de Cajero Virtual:** Módulo para la gestión de ventas online, validación de pagos y emisión de boletas digitales.
4. **Módulo de Taller y Despacho:** Sección para visualizar órdenes de armado pendientes, insumos necesarios, impresión de fichas y asignación de choferes.

## Cómo navegar
El flujo normal de cliente es Catálogo → Carrito → Pago → Confirmación. Para revisar directamente el Panel de Cajero o el Módulo de Taller (sin hacer una compra primero), usa la barra superior **"Modo demostración"**, que te lleva a cada vista con un clic.

## Cómo ejecutarlo
* **Local:** abre `index.html` directo en el navegador, no necesita instalación.
* **GitHub Pages:** sube el archivo a la raíz del repo y actívalo en *Settings → Pages*.

## Cobertura de la pauta
| Requisito | Dónde se cumple |
|---|---|
| HTML5 semántico | `header`, `nav`, `main`, `form`, `table` en cada vista |
| CSS propio | Variables, diseño responsivo, estados visuales |
| JS interactivo | Router por hash, validaciones, manipulación del DOM |
| Formulario de ingreso | Checkout (RUT, correo, teléfono, dirección) |
| Listado/consulta | Catálogo y tabla del Cajero |

## Enlace de Visualización
https://claudiofgp.github.io/DWM-202602/
