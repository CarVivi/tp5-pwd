<?php
include_once '../../configuracion.php';
include_once("../estructura/cabecera.php");
$datos = data_submitted();
<<<<<<< HEAD
$objSession = new Session();
$abmUsuario = new AbmUsuario();
$usuarios = $abmUsuario->buscar(["usnombre" => $datos['usNombre']]);
=======
/* $objSession = new Session(); */
$abmUsuario = new AbmUsuario();
/* $usuarios = $abmUsuario->buscar(["usnombre" => $datos['usNombre']]);
>>>>>>> 776c3eedb2932a4b077aa4580b5fc347a6dc7eda

$nombre = false;
if (count($usuarios) > 0) {
    $nombre = true;
}

$contraseña = false;
foreach ($usuarios as $usuario) {
    if ($usuario->getUspass() == $datos['usPass']) {
        $contraseña = true;
    }
<<<<<<< HEAD
}

?>

<?php
if ($objSession->iniciar($datos['usNombre'], $datos['usPass'])) {
=======
} */



$listaUsuarios = $abmUsuario->buscar(["usnombre" => $datos['usNombre']]);

    $existeUsuario=false;
    $verificarContrasenia = false;
    /* verificamos si existe el usuario */
    if (count($listaUsuarios) > 0) {
        $existeUsuario = true;
        $UnUsuario=$listaUsuarios[0];
        /* verificamos si la contrasenia coinciden */
        if ($UnUsuario->getUspass() == $datos['usPass']) {
            $verificarContrasenia = true;
        }else{
            echo "contraseña incorrecta";
        }
    }else{
        echo "usuario incorrecto";
    }


    /* si usuario y contrasenia son correctas inicimos session */
    if($existeUsuario && $verificarContrasenia){
        if($objSession->iniciar($datos['usNombre'],$datos['usPass'])){

            echo "ir pagina segura";
            header('location:../usuario/paginaSegura.php');
            
            exit();
        }
    }else{
        header('location:../login/login.php');
        exit();
    }
?>

<?php
/* if ($objSession->iniciar($datos['usNombre'], $datos['usPass'])) {
>>>>>>> 776c3eedb2932a4b077aa4580b5fc347a6dc7eda

    header('location:../usuario/paginaSegura.php');
    exit();
} else {
    if (!$contraseña && $nombre) {
        echo "Contraseña incorrecta<br>";
    } else {
        echo "Nombre incorrecto<br>";
    }
    echo "<a class='btn btn-primary' href='../login/login.php'>Volver a Intentar</a>";
<<<<<<< HEAD
}
?>
<a href="../ejercicios/paginaSegura.php"><button type="button" class="btn btn-outline-primary mt-3">Volver</button></a>
=======
} */
?>
<a href="../login/login.php"><button type="button" class="btn btn-outline-primary mt-3">Volver</button></a>
>>>>>>> 776c3eedb2932a4b077aa4580b5fc347a6dc7eda
<?php
include_once("../estructura/pie.php");
?>