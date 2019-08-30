<?php
    
    try{
         $conexion = new PDO(mysqli_connect:"localhost","root","",
"login");
    }catch(PDOException $prueba_error){
        echo "Error: " . $prueba_error->getMessage();
    }


?>