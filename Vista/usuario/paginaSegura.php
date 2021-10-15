<?php
include_once "../../configuracion.php";
include_once("../estructura/cabecera.php");
?>

<<<<<<< HEAD










<?php

$objAbmUsuario= new AbmUsuario();

$listaUs = $objAbmUsuario->buscar(null);


?>


<div class="card text-left">
    <img class="card-img-top" src="holder.js/100px180/" alt="">
    <div class="card-body">
        <h4 class="card-title">Bienvenido!!</h4>



<div class="row float-right">

    <div class="col-md-12 float-right">
        USUARIO
      <a class="btn btn-success" role="button" href="NuevoUsuario.php">nuevo </a>

=======
<div class="card text-left">
    <img class="card-img-top" src="holder.js/100px180/" alt="">
    <div class="card-body">
        <h4 class="card-title">Bienvenido!!  <?php echo $_SESSION['usnombre']?></h4>
        <p class="card-text">
            <a class="btn btn-primary" href="../accion/cerrarSession.php">Cerrar Sesion</a>
        </p>
>>>>>>> 776c3eedb2932a4b077aa4580b5fc347a6dc7eda
    </div>
</div>


<<<<<<< HEAD
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">nombre</th>
            <th scope="col">mail</th>
           
        </tr>
        </thead>
        <tbody>

<?php

 if( count($listaUs)>0){
    foreach ($listaUs as $objTabla) {
        
        echo '<tr><td>'.$objTabla->getIdusuario() .'</td>';
        echo '<td>'.$objTabla->getUsnombre() .'</td>';
        echo '<td>'.$objTabla->getUsmail().'</td>';
        echo '<td><a class="btn btn-info" role="button" href="listaUsuario.php?id='.$objTabla->getUsnombre().'">editar</a>'.'</td></tr>';
        
	}
}



?>
        </tbody>
    </table>
</div>

</div>
</div>


=======
>>>>>>> 776c3eedb2932a4b077aa4580b5fc347a6dc7eda
<?php
include_once("../estructura/pie.php");
?>