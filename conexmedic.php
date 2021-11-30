<?php 

include("conex.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['Raza']) >= 1 && strlen($_POST['sintomas']) >= 1) {
	    $Raza = trim($_POST['Raza']);
	    $sintomas = trim($_POST['sintomas']);
	    $comportamiento = trim($_POST['comportamiento']);
		$peso= trim($_POST['peso']);
		$altura= trim ($_POST['altura']);
        $alergias = trim($_POST['alergias']);
	    $consulta = "INSERT INTO medico(Raza, sintomas,comportamiento,peso, altura,alergias) VALUES ('$Raza','$sintomas','$comportamiento','$peso','$altura','$alergias')";
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