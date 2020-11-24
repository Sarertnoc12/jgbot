
<?php

include('conectarse.php');


	$query="SELECT idcancion,nombrecancion FROM canciones";
	$result = mysqli_query($link, $query) or die("Ocurrio un error en la consulta SQL");
	while(($fila=mysqli_fetch_array($result)) !=NULL){
	echo '<a><li class="list-group-item" id="'.$fila["idcancion"].'">'.$fila["nombrecancion"].'</li></a>';
	}

mysqli_free_result($result);

mysqli_close($link);

?>