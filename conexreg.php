<?php 

include("conex.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['Nombre']) >= 1 && strlen($_POST['Apellido']) >= 1) {
	    $Nombre = trim($_POST['Nombre']);
	    $Apellido = trim($_POST['Apellido']);
	    $Nombre_mascota = trim($_POST['Nombre_mascota']);
		$correo= trim($_POST['correo']);
		$telf= trim ($_POST['telf']);
        $horario = trim($_POST['horario']);
	    $consulta =
         "INSERT INTO registro( Nombre, Apellido, Nombre_mascota, correo, telf, horario) VALUES ('$Nombre','$Apellido','$Nombre_mascota','$correo','$telf','$horario')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">Tus datos se enviaron corrctamente</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">Algo te fallo amigo .-.</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>