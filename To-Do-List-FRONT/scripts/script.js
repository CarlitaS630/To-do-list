const API = "http://localhost:8000/tareas";

//Traigo los elementos para el DOM
//¿Por qué? Estos van a ser usados para todos los métodos
const listaTareas = document.getElementById("listaTareas");
const formTarea = document.getElementById("form-tarea");
const inputTitulo = document.getElementById("tTarea");
const desc = document.getElementById("descTarea");
const btGuardar=document.getElementById('btGuardar');

//Formulario 
formTarea.addEventListener("submit", (e) => {
    e.preventDefault();

    const nuevaTarea = {
        titulo: inputTitulo.value,
        descripcion: inputDesc.value
    };

    crearTarea(nuevaTarea);
});

//GET
const MostrarT = async () =>{
    try{
        const res = await axios.get(API);
        const tareas= res.data;

        tareas.array.forEach(tareas=> {
            const li = document.createElement("li");
             const titulo = document.createElement("h3");
    titulo.textContent = t.titulo;

    const desc = document.createElement("p");
    desc.textContent = t.descripcion;

    const btnContainer = document.createElement("div");
    btnContainer.classList.add("btn-container");

    const btnEditar = document.createElement("button");
    btnEditar.textContent = "Editar";

    const btnEliminar = document.createElement("button");
    btnEliminar.textContent = "Eliminar";
    btnEliminar.classList.add("danger");

    btnContainer.appendChild(btnEditar);
    btnContainer.appendChild(btnEliminar);

    li.appendChild(titulo);
    li.appendChild(desc);
    li.appendChild(btnContainer);

    listaTareas.appendChild(li);
  })
    }catch (error) {
        console.error("Error al mostrar la tarea", error.message);
        alert("Error al mostrar esta tarea");
    };
}

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



const crearTarea = async(data)=>{
try{
    await axios.post(API, data);
    MostrarT();
    formTarea.reset();
    
}catch(error){
    console.error("Error al crear tarea:", error.message);
    alert("No se pudo crear la tarea");
}

};
// DELETE
const eliminarTarea = async (id) => {
  try {
    const res = await axios.delete(`${API}/${id}`);
    console.log("Tarea eliminada:", res.data || "Operación exitosa");
  } catch (error) {
    console.error("Error al eliminar tarea:", error.message);
  }
};