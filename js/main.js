//Guardar el formulario en una variable
let formulario = document.getElementById("formNota")
let ruta = "gestionarNotas.php"
//Escuchar el evento submit y ejecutar una función
formulario.addEventListener("submit", guardarNota )

//definir esa función
function guardarNota(e) {
     e.preventDefault()
     

     //crear un objeto formulario
     let data = new FormData(formulario)
     data.append("operacion", "crearNota")
     //enviar esa info al lado del servidor
     fetch(ruta, 
            {
                method: "POST",
                body: data
            }
        )
}
