<?php
<<<<<<< HEAD
include_once '../../configuracion.php';
include_once("../estructura/cabecera.php");
session_start();
// session_unset();
session_destroy();
if (isset($_SESSION)) {
    echo 'sesión finalizada';
    echo (session_status());
}
=======
/* include_once '../../configuracion.php'; */
include_once("../estructura/cabecera.php");
/* session_start(); */
/* session_unset(); */
/* if(session_destroy()){

    if (isset($_SESSION)) {
        echo "\nen el if";
        echo (session_status());
        print_r(session_status());
    }else{
        echo "no hay session";
    }
} */

session_unset();
 if(session_destroy()){
    header('location:../login/login.php');
    
 }
 ?>
 <meta http-equiv="refresh" content="0;url=../login/login.php">
>>>>>>> 776c3eedb2932a4b077aa4580b5fc347a6dc7eda
// $objSess = new Session();

// if ($objSess->cerrar()) {
//     header('location:../login/login.php');
//     exit();
// } else {
//     echo "Hubo un error al cerrar la sesion";
// }
<<<<<<< HEAD
include_once("../estructura/pie.php");
=======
<?php
include_once("../estructura/pie.php");
?>
>>>>>>> 776c3eedb2932a4b077aa4580b5fc347a6dc7eda
