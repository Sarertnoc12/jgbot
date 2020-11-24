<?php
//session_start();
//if (@!$_SESSION['usuario']) {
	//header("location:index2.php");
//}
//?>
<!DOCTYPE html>
<html>
<head>

	<title>Control JGBOT</title>
	<meta name="viewport" content="initial-scale=1">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link href="https://fonts.googleapis.com/css?family=Ravi+Prakash" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type='text/javascript' src="scripts/jquery.min.js"></script>
	<script type='text/javascript' src="scripts/bootstrap.min.js"></script>
	

   
</head>

<body>

<header>
	<div class="container">
		<div class="row">
			<div class="col-sm-5 col-sm-offset-3">
				<h1>JGBOT	
			</div>	
			<div class="col-sm-4" id="avatar">
				<a href="https://www.facebook.com/gabocont"><img class="avatar" src="imagenes/facebook.png"></a>
				<a href=""><img class="avatar" src="imagenes/pdf.png"></a>
				<a href=""><img class="avatar" src="imagenes/github.png"></a>
				<a href=""><img class="avatar" src="imagenes/w.png"onclick='obtener(9)'></a>		
				<a href="logout.php"><img class="avatar" src="imagenes/logout.png"></a>
	</div>
		</div>
	</div>
</header>

<section>
	<div class="container">
		<div class="row">
			<br><br>
			<div class="col-sm-8" id="contenedor2">
				<img src="imagenes/carrito/8.png" id="imagen">
				<br><br>
				<a><img src="imagenes/funciones/vol-.png" onclick='obtener(1)' class="botones"></a>
				<a><img src="imagenes/funciones/musica.jpg" onclick='obtener(2)' class="botones"></a>
				<a><img src="imagenes/funciones/izquierda.png" onclick='obtener(3)' class="botones"></a>
				<a><img src="imagenes/funciones/adelante.png" onclick='obtener(4)' class="botones"></a>
				<a><img src="imagenes/funciones/para.png" onclick='obtener(5)' class="botones"></a>
				<a><img src="imagenes/funciones/atras.png" onclick='obtener(6)' class="botones"></a>
				<a><img src="imagenes/funciones/derecha.png" onclick='obtener(7)' class="botones"></a>
				<a><img src="imagenes/funciones/vol+.png" onclick='obtener(8)' class="botones"></a>
			</div>
			<div id="conten2" class="col-sm-4">
				<div id="conten">
					<ul class="list-group" id="playlist">
					</ul>
				</div>
				<br>
				<button id="subircancion" type="button" class="btn btn-success" data-toggle="modal" data-target="#formu">SUBIR CANCIONES</button>		
				<button id="eliminarcancion" type="button" class="btn btn-danger" data-toggle="modal" data-target="#formu">ELIMINAR CANCIONES</button>
				<div id="formu" class="modal fade" role="dialog">
				</div>			
			</div>
		</div>
	</div>
</section>

<section id="prueba">
	
</section>

<section id="prueba2">
	
</section>

<footer>
	<div class="container">
		<h1>developed by Sarertnoc & Cerquera	</h1>
	</div>
</footer>

	<script type='text/javascript' src="scripts/app.js" ></script>
	<script type='text/javascript' src="scripts/app2.js"></script>
	<script src="scripts/script.js"></script>
    <script src="scripts/script2.js"></script>
</body>

</html>
