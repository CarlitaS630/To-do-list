# TP Prácticas - Frontend

## Descripción
Esta parte del proyecto corresponde a la **interfaz visual** que ve y usa el usuario.  
Su función es mostrar la lista de tareas, permitir agregar nuevas y comunicarse con el backend a través de peticiones HTTP usando axios.

El frontend no almacena datos por sí mismo: solo los muestra y envía peticiones a la API REST desarrollada en PHP.

## Componentes principales

### `index.html`
- Contiene la estructura base del sitio
  - Una lista (`<ul>` o `<div>`) para mostrar las tareas.
  - Un formulario (`<form>` con input y botones).
  - Formulario flotante para editar una tarea seleccionada.
- Incluye los scripts:
  - `<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>`
  - `<script src="js/main.js"></script>`

### `styles.css`
- Define el diseño visual:
  - Colores, tipografía, márgenes, botones.
  - Diseño limpio y centrado.
- Animaciones suaves y un formulario flotante con fondo oscurecido.

### `script.js`
- Contiene toda la lógica del frontend en JavaScript, utilizando **Axios**:
  - axios.get() -> obtiene la lista de tareas.
  - axios.post() -> agrega una nueva tarea.
  - axios.put() -> modifica una tarea existente (editar título o marcar como completada).
  - axios.delete() -> elimina una tarea seleccioanda.
- Controla los eventos del DOM para actualizar la interfaz sin recargar la página.
- Incluye validaciones.

## Ejecución del frontend
1. Asegurarse de que el backend esté corriendo en **localhost:8000**.
2. Abrir el archivo *index.html* en el navegador.
3. Interactuar con el sistema:
   - Ver tareas.
   - Agregar nuevas.
   - Editar y eliminar tareas desde los botones correspondientes.