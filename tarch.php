<?php
    include('conectarse.php');

    error_reporting(0);
    
    $query='TRUNCATE TABLE canciones';
    $result = mysqli_query($link, $query) or die("Ocurrio un error en la consulta SQL");
    
    $directorio = "arch";

    $archivos = scandir($directorio);
    $num = count($archivos);

    for ($i=0; $i<=$num; $i++) {
    unlink ('./arch/'.$archivos[$i]); 
    }

    echo '<script>location.reload();</script>';

?>