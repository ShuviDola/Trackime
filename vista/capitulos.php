<?PHP
	require_once("../controlador/capitulos.php");
	$serie = $_SESSION["capitulos"];
	$nombre = $serie[0]->dato["nombre"];
	$capitulos = $serie[0]->dato["capitulos"];
	$id = $serie[0]->dato["id"];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap Example</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

	<!-- Barra de navegacion -->
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a class="navbar-brand" href="../index.php">AnimeTracker</a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navb">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="./series.php">Series</a>
					</li>
				</ul>
				<ul class="navbar-nav ml-auto">
				<?php
				if (isset($_SESSION["login"])){
					echo '<li class="nav-item"> <a class="nav-link" href="./panel.php">Panel de Usuario</a> </li>';
					echo '<li class="nav-item"> <a class="nav-link" href="./logout.php">Cerrar Sesion</a> </li>';
				}else{
					echo '<li class="nav-item"> <a class="nav-link" href="./registro.php">Registrarse</a> </li>';
					echo '<li class="nav-item"> <a class="nav-link" href="./login.php">Logearse</a> </li>';
				}
				?>
				</ul>
			</div>
		</nav>
	</div>

	<!-- Lista capitulos -->

	<br>

	<div class="container">
 		<div class="row">
    		<div class="col-sm-7">
				<h3 align="center">Listado de capítulos</h3>
				<table class="table table-hover">
					<tbody>
					<?PHP
						for($i=$capitulos; $i>0; $i--){
							echo "<tr>";
								echo "<td><a href='./visor.php?anime=$nombre&cap=$i'>$nombre</a></td>";
								echo "<td>$i</td>";
							echo "</tr>";
						}
					?>
					</tbody>
				</table>
			</div>
		<div align="center" class="col-sm-5">
				<?PHP
				echo '<img src="../images/'.$id.'.jpg" class="img-thumbnail" width="304" height="236">';	
				echo "<h5>$nombre</h5>"
				?>

				<p align="left">	
					Lorem Ipsum is simply dummy text of the printing and typesetting industry.			
					Lorem Ipsum is simply dummy text of the printing and typesetting industry.
				</p>
			</div>
		</div>
	</div>
	

</body>
</html>