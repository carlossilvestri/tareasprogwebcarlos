<?php 
/*
************** CALCULA LA HIPOTENUSA DEL TRIANGULO RECTANGULO ***************************
*/
// Obtener los datos.
// echo "<pre>";
// echo var_dump($_POST);
// echo "</pre>";
if (isset($_POST['lado1'])) {
    $lado1 = (float) ($_POST['lado1']);
} else {
    $lado1 = null;
}
if (isset($_POST['lado2'])) {
    $lado2 = (float) ($_POST['lado2']);
} else {
    $lado2 = null;
}
if (isset($_POST['button'])) {
    $button = $_POST['button'];
} else {
    $button = null;
}
// echo "Lado1: " . $lado1 . "<br>";
// echo "Lado2: " . $lado2 . "<br>";
// echo "button: " . $button . "<br>";
// echo "Suma: " . $suma . "<br>";

$hipotenusa = null;
// Si alguno de los estan datos estan vacios.
if(!$button || !$lado1 || !$lado2){
    $hipotenusa = 'No válido';
}else{
    // Calcular la hipotenusa
    $hipotenusa = sqrt( pow ( $lado1 , 2 ) + pow ( $lado2 , 2 ));
}
?>