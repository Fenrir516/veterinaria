<?php 

include("conex.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['baño_masaje']) >= 1 && strlen($_POST['secado_rapido']) >= 1) {
	    $baño_masaje = trim($_POST['baño_masaje']);
	    $secado_rapido = trim($_POST['secado_rapido']);
	    $uñas = trim($_POST['uñas']);
		$limpi_oidos= trim($_POST['limpi_oidos']);
		$lav_dientes= trim ($_POST['lav_dientes']);
        $corte_pelo= trim ($_POST['corte_pelo']);
	    $consulta = "INSERT INTO estetico(baño_masaje, secado_rapido,uñas,limpi_oidos, corte_pelo, lav_dientes) VALUES ('$baño_masaje','$secado_rapido','$uñas','$limpi_oidos','$corte_pelo','$lav_dientes')";
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