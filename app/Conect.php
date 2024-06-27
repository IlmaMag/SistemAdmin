<?php
$Servidor ="localhost"; 
$UsuarioBd = "root";
$PasswordBd = "";
$Bd = "atizapani";
$Conecta = new mysqli($Servidor, $UsuarioBd, $PasswordBd, $Bd);
if($Conecta->connect_errno){
    die("Error al conectar la base de datos".$Conecta->connect_errno);
}
?>