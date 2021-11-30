<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>pagina web con base de datos veterinaria</title>
        <link rel="stylesheet" href="css/estilos.css">
    </head>
<body>
    <header>
        <nav>
            <a href="index.html">Inicio</a>
            <a href="registro.html">registro</a>
            <a href="medico.html">medico</a>
            <a href="estetico.html">estetico</a>
        </nav>
        <section class="textos-header">
            <h1>Clínica Veterinaria</h1>
            <h2>inventese un nombre fernan</h2>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: #fff;"></path>
            </svg></div>
    </header>
    <form method="post">
    	<h1 class="h">Registro</h1>
        <input type="text" name="Nombre" placeholder="Nombre">
    	<input type="text" name="Apellido" placeholder="Apellido">
		<input type="text" name="Nombre_mascota" placeholder="Nombre de la mascota">
        <input type="email" name="correo" placeholder="Correo">
    	<input type="text" name="telf" placeholder="Telefono">
		<input type="date" name="horario" placeholder="Horario">
    	<input type="submit" name="register">
    </form>
    <?html 
        include("conexreg.html");
        ?>
    <footer>
        <div class="contenedor-footer">
            <div class="content-foo">
                <h4>Marcos Javier</h4>
                <p>Franco Ripol</p>
            </div>
            <div class="content-foo">
                <h4>Fernando</h4>
                <p>Estrada Aldama</p>
            </div>
            <div class="content-foo">
                <h4>Grado y Grupo</h4>
                <p>5J</p>
            </div>
        </div>
        <h2 class="titulo-final">clinica veterinaria "AMLOPET"</h2>
    </footer>
</body>

</html>