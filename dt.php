<?php
// Configuracion para acceder ala base de datos
function conn(){
    $hostname = "localhost";
    $usuariodt = "root";
    $passworddt = "";
    $dtname = "univesidad";

    // Generando la conexion con el servidor
    $conectar = mysqli_connect($hostname, $usuariodt, $passworddt, $dtname);
    return $conectar;
}
?>