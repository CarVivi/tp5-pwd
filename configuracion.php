<?php header('Content-Type: text/html; charset=utf-8');
header("Cache-Control: no-cache, must-revalidate ");

/////////////////////////////
// CONFIGURACION APP//
/////////////////////////////

<<<<<<< HEAD
$PROYECTO = 'TP5';
=======
$PROYECTO = 'ProgWebDinamica/ProgWebDinamica/Tp4_PHPyMySql';
>>>>>>> 776c3eedb2932a4b077aa4580b5fc347a6dc7eda

//variable que almacena el directorio del proyecto
$ROOT = $_SERVER['DOCUMENT_ROOT'] . "/$PROYECTO/";

include_once($ROOT . 'utiles/funciones.php');


// Variable que define la pagina de autenticacion del proyecto
$INICIO = "Location:http://" . $_SERVER['HTTP_HOST'] . "/$PROYECTO/vista/login/login.php";

// variable que define la pagina principal del proyecto (menu principal)
<<<<<<< HEAD
$PRINCIPAL = "Location:http://" . $_SERVER['HTTP_HOST'] . "/$PROYECTO/inicio/index.php";
=======
$PRINCIPAL = "Location:http://" . $_SERVER['HTTP_HOST'] . "/$PROYECTO/principal.php";
>>>>>>> 776c3eedb2932a4b077aa4580b5fc347a6dc7eda


$_SESSION['ROOT'] = $ROOT;
