
<?php

include('conectarse.php');
$footer="";
$opcion=$_POST['valor'];

switch ($opcion) {

	case '1':
	$header ="SUBIR CANCIONES";
	$body = '<div id="formulario">';
	$body .= '<form action="arch.php" method="post" enctype="multipart/form-data">';
    $body .= '<input type="file" name="arch[]" multiple><br>';
    $body .= '<input type="submit" class="btn btn-success" id="enviar" value="SUBIR CANCIONES">';
	$body .= '</form>';
	$body .= '</div>';
	break;
	
	case '2':
	$header = "ELIMINAR CANCIONES";
	$body = '<form action="earch.php" method="post">';
	$body .= '<select name="cancion">';
  	
  	$query='SELECT idcancion, nombrecancion FROM canciones';
	$result = mysqli_query($link, $query) or die("Ocurrio un error en la consulta SQL");
	while(($fila=mysqli_fetch_array($result,MYSQLI_ASSOC)) !=NULL){
	$body .= '<option value="'.$fila["idcancion"].'">'.$fila["nombrecancion"].'</option>';
	}

	$body .='</select>';
  	$body .= '<br><br><input type="submit" class="btn btn-success" id="enviar" value="ELIMINAR CANCION">';
  	$body .= '</form>';
	$footer = '<button id="vaciar" type="button" class="btn btn-danger" onclick="consulta(\'tarch.php\',3)">VACIAR CANCIONES</button>';
	mysqli_free_result($result);
	break;

	default:
	break;
}


$modal = '<div class="modal-dialog">'; 
$modal .= '<div class="modal-content">';
$modal .= '<div class="modal-header">';
$modal .= '<button type="button" class="close" data-dismiss="modal">&times;</button>';
$modal .= '<h4 class="modal-title">'.$header.'</h4>';
$modal .= '</div>';
$modal .= '<div class="modal-body">';
$modal .= $body;
$modal .= '</div>';
$modal .= '<div class="modal-footer">';
$modal .= $footer;
$modal .= '<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>';
$modal .= '</div>';
$modal .= '</div>';
$modal .= '</div>';

echo $modal;

mysqli_close($link);


?>
