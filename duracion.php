
<?php

include('conectarse.php');

	
	$opcion2=$_POST['valor2'];
	$query='SELECT idcancion,nombrecancion FROM canciones WHERE idcancion LIKE\''. $opcion2.'\'';
	$result = mysqli_query($link, $query) or die("Ocurrio un error en la consulta SQL");
	while(($fila=mysqli_fetch_array($result)) !=NULL){
	$cancion=($fila["nombrecancion"]);
	
	}

	$duracion = shell_exec('sudo python /var/www/html/bot4/py/duracion.py \''.$cancion.'\'');
	
	//exec('sudo python /var/www/html/bot4/py/kill.py');
	//exec('sudo mpg123 -c /var/www/html/bot4/arch/\''.$cancion.'\'');
	echo $duracion;	
	

mysqli_free_result($result);

mysqli_close($link);

?>
