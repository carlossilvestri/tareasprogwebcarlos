//Variables
const btnRegresar = document.getElementById("btnRegresar");


//Event Listeners
eventListeners();

function eventListeners() {
    //Inicio de la aplicacion y deshabilitar submit
    document.addEventListener("DOMContentLoaded", inicioApp);


}

function inicioApp(e) {
    e.preventDefault();
    if (btnRegresar) {
        btnRegresar.addEventListener("click", regresar);
    }
}

function regresar() {
    window.history.back();
}