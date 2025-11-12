# TP PRÁCTICAS - Backend

## Descripción
Esta parte del proyecto se encarga de manejar toda la lógica interna de la aplicación To-Do List.  
Aquí se desarrolla una API REST con PHP, organizada bajo la arquitectura MVC (Modelo–Vista–Controlador) y utilizando PHPRouter para definir las rutas del servidor.

El backend recibe las peticiones desde el frontend (por ejemplo, pedir la lista de tareas o agregar una nueva), las procesa y devuelve las respuestas en formato **JSON**.

## Tecnologías utilizadas
- PHP
- PHPRouter -> para definir las rutas de la API.
- JSON -> para las peticiones HTTTP
- Arquitectura MVC -> separa datos, lógica y rutas.

## Componentes principales

### Modelo (`/models/Tarea.php`)
- Define la estructura de una tarea (`id`, `titulo`,`descripcion`, `completada`).
- Contiene los métodos:
    - `getAll()` -> devuelve la lista complera de tareas.
    - `create()` -> agrega una nueva tarea.
    - `update()` -> actualiza una tarea.
    - `delete()` -> elimina la tarea.
 
### Controlador (`/controllers/tareasController.php`)
- Lógica que maneja las peticiones del frontend.
- Usa el modelo para acceder o modificar los datos.
- Devuelve siempre la respuesta en **JSON**.
    - `getAll()` -> maneja GET 
    - `create()` -> maneja POST 
    - `update($id,$datos)` -> maneja PUT o FETCH 
    - `delete($id)` -> maneja DELETE

### Rutas
Define los endpoints de la API dentro del index.php. Por ejemplo:
- $router->get('/api/tareas', 'TareasController::class,getAll');
- $router->post('/api/tareas', 'TareasController::class,create');
- $router->put('/api/tareas/{id}','TareasController::class,update');
- $router->delete('/api/tareas/{id}','TareasController::class,delete');


### Formato JSON
La tarea será guardada de la siguiente manera:
[
    {
        "id": 1,
        "titulo": "Estudiar PHP",
        "completada": false
    }
]

#### Cosas necesarias para el BackEnd

- Base de datos "Tareas a realizar"
- Agregar librerías necesarias (phprouter, ejemplo)
- Modelos
- Controladores
- Conexión con la BD
- .htaccess
- Endpoints en el index.php



