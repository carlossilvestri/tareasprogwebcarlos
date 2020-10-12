<?php 
// Obtener los datos.
// echo "<pre>";
// echo var_dump($_POST);
// echo "</pre>";
// die();
if (isset($_POST['first_names1'])) {
    $first_names1 = $_POST['first_names1'];
} else {
    $first_names1 = null;
}
if (isset($_POST['last_names1'])) {
    $last_names1 = ($_POST['last_names1']);
} else {
    $last_names1 = null;
}
if (isset($_POST['cedula1'])) {
    $cedula1 = (int) ($_POST['cedula1']);
} else {
    $cedula1 = null;
}
if (isset($_POST['lugar1'])) {
    $lugar1 = $_POST['lugar1'];
} else {
    $lugar1 = null;
}
if (isset($_POST['departamento1'])) {
    $departamento1 = $_POST['departamento1'];
} else {
    $departamento1 = null;
}
if (isset($_POST['sueldo1'])) {
    $sueldo1 = (float) $_POST['sueldo1'];
} else {
    $sueldo1 = null;
}


if (isset($_POST['first_names2'])) {
    $first_names2 = $_POST['first_names2'];
} else {
    $first_names2 = null;
}
if (isset($_POST['last_names2'])) {
    $last_names2 = $_POST['last_names2'];
} else {
    $last_names2 = null;
}
if (isset($_POST['cedula2'])) {
    $cedula2 = (int) ($_POST['cedula2']);
} else {
    $cedula2 = null;
}
if (isset($_POST['lugar2'])) {
    $lugar2 = $_POST['lugar2'];
} else {
    $lugar2 = null;
}
if (isset($_POST['departamento2'])) {
    $departamento2 = $_POST['departamento2'];
} else {
    $departamento2 = null;
}
if (isset($_POST['sueldo2'])) {
    $sueldo2 = (float) $_POST['sueldo2'];
} else {
    $sueldo2 = null;
}

if (isset($_POST['first_names3'])) {
    $first_names3 = $_POST['first_names3'];
} else {
    $first_names3 = null;
}
if (isset($_POST['last_names3'])) {
    $last_names3 = $_POST['last_names3'];
} else {
    $last_names3 = null;
}
if (isset($_POST['cedula3'])) {
    $cedula3 = (int) ($_POST['cedula3']);
} else {
    $cedula3 = null;
}
if (isset($_POST['lugar3'])) {
    $lugar3 = $_POST['lugar3'];
} else {
    $lugar3 = null;
}
if (isset($_POST['departamento3'])) {
    $departamento3 = $_POST['departamento3'];
} else {
    $departamento3 = null;
}
if (isset($_POST['sueldo3'])) {
    $sueldo3 = (float) $_POST['sueldo3'];
} else {
    $sueldo3 = null;
}
$sd = array(
    'value' => '0',
    'escrito' => 'No se eligió departamento'
);
$rs = array(
    'value' => 'rs',
    'escrito' => 'Recursos Humanos'
);
$inf = array(
    'value' => 'inf',
    'escrito' => 'Infórmatica'
);
$cont = array(
    'value' => 'cont',
    'escrito' => 'Contabilidad'
);
$legal = array(
    'value' => 'legal',
    'escrito' => 'Legal'
);
$departamentos = array();
array_push($departamentos, $sd, $rs, $inf, $cont, $legal );

$arreglo1 = array(
    'nombres' => $first_names1,
    'apelldios' => $last_names1,
    'cedulas' => $cedula1,
    'lugar' => $lugar1,
    'departamento' => $departamento1,
    'sueldo' => $sueldo1
);
$arreglo2 = array(
    'nombres' => $first_names2,
    'apelldios' => $last_names2,
    'cedulas' => $cedula2,
    'lugar' => $lugar2,
    'departamento' => $departamento2,
    'sueldo' => $sueldo2
);
$arreglo3 = array(
    'nombres' => $first_names3,
    'apelldios' => $last_names3,
    'cedulas' => $cedula3,
    'lugar' => $lugar3,
    'departamento' => $departamento3,
    'sueldo' => $sueldo3
);
$arreglo = array();
array_push($arreglo, $arreglo1, $arreglo2, $arreglo3);
// echo "<pre>";
// var_dump($arreglo);
// echo "</pre>";
// echo "<pre>";
// var_dump($departamentos);
// echo "</pre>";


?>