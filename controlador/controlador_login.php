<?php
session_start();
if (!empty($_POST["btningresar"])) {
    if (!empty($_POST["correo"]) and !empty($_POST["password"])) {
        $correo=$_POST["correo"];
        $password=$_POST["password"];
        $sql=$conexion->query("select * from personal where correo='$correo' and password='$password' ");
        if ($datos=$sql-> fetch_object()) {
            $_SESSION["id"]=$datos->id;
            $_SESSION["nombre"]=$datos->Nombre;
            $_SESSION["apellido"]=$datos->Apellido;
            header("location: index.php");
        } else {
            echo "<div class='alert alert-danger'>Acceso denegado </div>";
        }
        
    } else {
        echo "campos vacios";
    }
    
}

?>