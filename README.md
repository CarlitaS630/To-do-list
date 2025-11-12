# Proyecto To-Do-List - Aplicación con API Rest en PHP

## ¿Qué es lo que se va a hacer? 
Este proyecto es realizado para la materia **Prácticas Profesionalizante III**, con el objetivo de crear un sistema o aplicación web llamada **To-Do-List (Lista de tareas)**.

La idea principal es practicar los conocimientos adquiridos de las dos partes (tanto BackEnd como FrontEnd) mediante una **API Rest**.

## ¿Qué es una API Rest?
Una **API** (Interfaz de Programación de Aplicaciones) permite que un programa se comunique con otro.
En este caso, la **API REST** creada con PHP permite que el frontend (la parte visual del sitio) pida datos o envíe nuevas tareas al servidor.

Por ejemplo:
- Cuando abrimos la página, el frontend pide al backend todas las tareas (GET).
- Cuando el usuario agrega una tarea nueva, el frontend se la envía al backend (POST).
- El backend devuelve la lista actualizada.

Todo esto se hace intercambiando información en formato **JSON**, que es un tipo de texto muy usado para representar datos.

## Cómo ejecutar el proyecto

### 1- Clonar repositorio

Para clonar el repositorio desde GitHub, se tiene que copiar esta línea de comando en la terminal:
"git clone {nombre del repositorio}"

### 2- Se instalan las dependencias del backend
Ejecutando en la terminal:
- composer install.
- composer require miladrahimi/phprouter "5.*" ││ En el caso de tener PhPRouter.

### 3- Iniciar el servidor local de PHP
Dentro de la terminal de la carpeta, se ejecuta:
php -S localhost:8000
Lo cual inicia el servidor en la dirección **http://localhost:8000**

### 4- Abrir el frontend
Se abre el archivo **index.html** con el navegador a utilizar.

## Conclusión
Este trabajo busca demostrar cómo se pueden integrar distintas tecnologías de forma organizada, aplicando buenas prácticas de programación.

## Manejo del BackEnd y el FrontEnd:

En las carpetas tanto de Back como Front, se encontrará un archivo .md con la información de lo que hace cada una; los métodos a utilizar y un poco de la lógica detrás para un mejor entendimiento.