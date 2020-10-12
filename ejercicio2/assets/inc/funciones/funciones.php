<?php 
/*
************** CALCULA LA HIPOTENUSA DEL TRIANGULO RECTANGULO ***************************
*/
// Obtener los datos.
// echo "<pre>";
// echo var_dump($_POST);
// echo "</pre>";
if (isset($_POST['checkbox'])) {
    $checkbox = $_POST['checkbox'];
} else {
    $checkbox = null;
}
if (isset($_POST['longitudLado'])) {
    $longitudLado = (float) ($_POST['longitudLado']);
} else {
    $longitudLado = null;
}
if (isset($_POST['apotema'])) {
    $apotema = (float) ($_POST['apotema']);
} else {
    $apotema = null;
}
if (isset($_POST['button'])) {
    $button = $_POST['button'];
} else {
    $button = null;
}
// echo "checkbox: " . $checkbox . "<br>";

// echo "longitudLado: " . $longitudLado . "<br>";
// echo "apotema: " . $apotema . "<br>";
// echo "button: " . $button . "<br>";
// echo "tangente de pi: " . tan(M_PI) . "<br>";
// echo "Area: " . (2*pow($longitudLado, 2))/tan(M_PI/8) . "<br>";

// echo "Pi: " . M_PI . "<br>";

// echo "Suma: " . $suma . "<br>";
$segunSu = 'Invalido';
$areaDelRectanguloRegular = null;
// Tomar una decision en base al checkbox.
if ($checkbox === "checkLong"){
    if ($longitudLado){
        $segunSu = "Un octógono con un lado de longitud igual a " . $longitudLado . " cm, tiene un área igual a: ";
        $areaDelRectanguloRegular = (2*pow($longitudLado, 2))/tan(M_PI/8);
    }
}else if ($checkbox === "checkApotema"){
    if ($apotema){
        $segunSu = "Un octógono con un apotema de longitud igual a " . $apotema . " cm, tiene un área igual a: ";
        $areaDelRectanguloRegular =  (8*pow($apotema, 2))*tan(M_PI/8);
    }
}else{

}
?>