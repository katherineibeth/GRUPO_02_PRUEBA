<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Laboratorio - Jefferson Nolasco</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<script src="js/funcion.js"></script>

	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/icomoon.css">

    <!-- GOOGLE FONT -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Titillium+Web:wght@900&display=swap" rel="stylesheet">
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="css/main.css">
	


</head>
<body>
	<center>
		<img src="img/logo.png" width="600" height="150">		
		<h1 style="text-align: center;">Aplicación de Tecnologías WEB</h1>
		<h1 style="text-align: center;">Prueba Tercer Parcial</h1>
		<h1 style="text-align: center;">GRUPO 2:</h1>
		<h1 style="text-align: center;">Katherine Chicaiza</h1>
		<h1 style="text-align: center;">Danilo Cuichan</h1>
		<h1 style="text-align: center;">Jefferson Nolasco</h1>
		<img src="img/figuras.png" width="600" height="150">
	<br>
	

	<?php
		include("include/class.figura.php");
		include("include/Interface.formulas.php");
		include("figuras/class.cuadrado.php");
		include("figuras/class.rectangulo.php");
		include("figuras/class.rombo.php");
		include("figuras/class.romboide.php");
		include("figuras/class.trapecio.php");

		
		
		if(isset($_POST['calcular'])){
			switch($_POST['tipo']){
				case "cuadrado": $f = new cuadrado($_POST['lado_1']);break;
				case "rectangulo": $f = new rectangulo($_POST['lado_1'],$_POST['lado_2']);break;				
				case "rombo": $f = new rombo($_POST['lado_1'],$_POST['lado_2'],$_POST['lado_3']);break;
				case "romboide": $f = new romboide($_POST['lado_1'],$_POST['lado_2'],$_POST['altura']);break;
				case "trapecio": $f = new trapecio($_POST['lado_1'],$_POST['lado_2'],$_POST['lado_3'],$_POST['lado_4'],$_POST['altura']);break;
			}
			mostrar($f);
		}else{
			
			echo figura::get_form();
		}
		
		
		function mostrar(formulas $fig){
			$fig->area();
			$fig->perimetro();
			echo "<form id='respuesta'";
			echo "<p id='sub'> ÁREA Y PERÍMETRO DE LA FIGURA SELECCIONADA </p>";
			echo "<br><br>El área del " . $fig->GetTipo() . " es:  " . $fig->GetArea() . " m^2 <br>";
			echo "<br>El perímetro del " . $fig->GetTipo() . " es:  " . $fig->GetPerimetro(). " m";
			echo "<br><br><br><button class='action-button' name='regresar'><a href='index.php'>Inicio</a></button></form>";
		}

	?>
	</center>
	
</body>

</html>
