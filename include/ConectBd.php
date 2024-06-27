<?php
$HostL ="localhost";
$UserL ="root";
$PasswordL ="";
$DataBase ="atizapani";
$ConectionBd = mysqli_connect($HostL,$UserL,$PasswordL,$DataBase);
if($ConectionBd->connect_errno){
    die('Error al conectar la base de datos con la aplicacion web'.$ConectionBd->connect_errno);
}
?>