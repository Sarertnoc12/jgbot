<?php
    include('conectarse.php');
    $opcion2 = $_POST['cancion'];
   
    $consulta= 'SELECT idcancion, nombrecancion FROM canciones WHERE idcancion LIKE '.$opcion2;
    $result = mysqli_query($link, $consulta)or die("datos no enlazados");
    $fila = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $cancion = $fila["nombrecancion"];
    unlink('./arch/'.$cancion);
    echo '<script>alert("la cancion '.$cancion.' fue eliminada")</script>';

    $consulta= 'DELETE FROM canciones WHERE idcancion LIKE '.$opcion2;
    mysqli_query($link, $consulta)or die("datos no enlazados");
    
    mysqli_free_result($result);
    header("Refresh: 0.01; url=index.php");
?>