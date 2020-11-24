<?php

	$link=mysqli_connect("localhost", "root", "123456", "musica");


	if (mysqli_connect_errno())
  	{
  	echo "Error al conectarse al servidor " . mysqli_connect_error();
  	}	

?>
