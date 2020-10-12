// Variables
const btnSiguiente = document.getElementById("btnSiguiente");


eventListers();

function eventListers() {
    // Eventos.

    // Select de Materialize con jQuery
    $(document).ready(function () {
        $('select').formSelect();
        initApp();
    });
    if (btnSiguiente) {
        btnSiguiente.addEventListener("click", accionSiguiente);
    }
}

function accionSiguiente() {
    console.log("Presionaste siguiente");
}

function accionEnviar() {

}

function initApp() {

}