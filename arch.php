<?php
    include('conectarse.php');
    
    $carpeta="./arch/";
 
        for($i=0;$i<count($_FILES["arch"]["name"]);$i++)
        {   

            if($_FILES["arch"]["name"][$i])
            {

                if($_FILES["arch"]["type"][$i]=="audio/mp3")
                {

                    $origen=$_FILES["arch"]["tmp_name"][$i];
                    $cancion = $_FILES["arch"]["name"][$i];
                    $destino=$carpeta.$_FILES["arch"]["name"][$i];

                    //move_uploaded_file($origen, $destino);
                    copy($origen, $destino); 

                    $consulta= "INSERT INTO canciones (nombrecancion) VALUES ('$cancion')";
                    mysqli_query($link, $consulta)or die("datos no enlazados");
                    
                }
                else{
                    
                    echo '<script>alert("El archivo subido no es una cancion mp3");</script>';
                }       
            }
            else{
                echo '<script>alert("No ha subido ninguna cancion");</script>';
            }
         }        
    header("Refresh: 0.1; url=index.php");
?>