function mostrarResultado() {
   	document.getElementById("cargando").setAttribute("hidden", true);
    document.getElementById("tabla-resultado").removeAttribute("hidden");
}

function cargarConsulta() {
    document.getElementById("cargando").removeAttribute("hidden");
}