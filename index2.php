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
		</div>
	</div>
</header>

<section id="login"><div class="container bajar">
<div class="row">
<div class="col-sm-4 col-sm-offset-4 col-xs-8 col-xs-offset-2" >
<form class="form-horizontal" action="proceso.php" method="post">
  <div class="form-group">
    <label for="Usuario"  control-label">Usuario</label>
      <input type="text" class="form-control" id="inputEmail3" placeholder="Usuario" name="usuario">
    </div>
  <div class="form-group">
    <label for="inputPassword3"  control-label">Password</label>
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password">
  </div>
  <div class="form-group">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Recordarme 
        </label></div></div>
  <div class="form-group centrar">
      <button type="submit" class="btn btn-success">iniciar sesion</button>
  </div>
</form>
</div>
</div>
</div></section>

<footer class="navbar-fixed-bottom">
	<div class="container ">
		<h1>developed by Sarertnoc & Cerquera	</h1>
	</div>
</footer>

</body>

</html>
