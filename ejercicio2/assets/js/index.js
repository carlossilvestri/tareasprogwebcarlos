//Variables
const btnRegresar = document.getElementById("btnRegresar"),
    btnCalcular = document.getElementById("calcular"),
    checkLong = document.getElementById("checkLong"),
    checkApotema = document.getElementById("checkApotema"),
    inputApotema = document.getElementById("inputApotema"),
    inputLongitudLado = document.getElementById("inputLongitudLado");
let booleanCheckLong = null;
if (checkLong) {
    booleanCheckLong = checkLong.checked;
}


//Event Listeners
eventListeners();

function eventListeners() {
    //Inicio de la aplicacion y deshabilitar submit
    document.addEventListener("DOMContentLoaded", inicioApp);
    if (checkLong) {
        checkLong.addEventListener("click", mostrarOcultarInput);
        checkApotema.addEventListener("click", mostrarOcultarInput);
        inputApotema.addEventListener("input", mostrarOcultarBoton);
        inputLongitudLado.addEventListener("input", mostrarOcultarBoton);
    }


}

// Functiones
function inicioApp(e) {
    e.preventDefault();
    ocultarInputs();
    if (btnCalcular) {
        btnCalcular.disabled = true; // Deshabilitar boton de calcular.
    }
    if (btnRegresar) {
        btnRegresar.addEventListener("click", regresar);
    }
}

function regresar() {
    window.history.back();
}

function ocultarInputs() {
    const divLongitudLado = document.getElementById("longitudLado");
    const divApotema = document.getElementById("apotema");
    if (!divLongitudLado || !divApotema) {
        return;
    }
    // Si existen los inputs
    $("#longitudLado").hide();
    $("#apotema").hide();

}

function mostrarOcultarInput() {
    booleanCheckLong = checkLong.checked;
    if (booleanCheckLong) {
        $("#longitudLado").show();
        $("#apotema").hide();
    } else {
        $("#longitudLado").hide();
        $("#apotema").show();
    }
    mostrarOcultarBoton();
}

function mostrarOcultarBoton() {
    const contenidoInputApotema = inputApotema.value;
    const contenidoInputLongitudLado = inputLongitudLado.value;
    // Si el usuario escribio algo en el input LongitudLado pero no escribio nada en el otro input
    if (booleanCheckLong && contenidoInputLongitudLado.length > 0) {
        // Se puede activar el boton calcular.
        btnCalcular.disabled = false;
    } else if (!booleanCheckLong && contenidoInputApotema.length > 0) {
        // Si se presiono el btn radio check apotema y el usuario escribio algo en el InputApotema
        // Se puede activar el boton calcular.
        btnCalcular.disabled = false;
    } else {
        btnCalcular.disabled = true;
    }

}