const API = "http://localhost:8000/tareas";

//Traigo los elementos para el DOM
//¿Por qué? Estos van a ser usados para todos los métodos
const listaTareas = document.getElementById("listaTareas");
const formTarea = document.getElementById("form-tarea");
const inputTitulo = document.getElementById("tTarea");
const desc = document.getElementById("descTarea");


// PUT = EDITAR TAREA EXISTENTE
const editarTarea = async(id, data) => {
    try {
        await axios.put(`API/${id}`, data);
        //método para obtener tareas
        obtenerTareas();
    } catch (error) {
        console.error("Error al editar tarea", error.message);
        alert("Error al editar esta tarea");
    }
}