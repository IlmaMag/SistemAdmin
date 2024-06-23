<?php
    include 'Conect.php';
     if(isset($_POST['BatnRegistra'])){
     $Nombre = $Conecta->real_escape_string($_POST['Nombre']);
     $Ap = $Conecta->real_escape_string($_POST['Ap']);
     $Am = $Conecta->real_escape_string($_POST['Am']);
     $Tel = $Conecta->real_escape_string($_POST['Tel']);
     $Email= $Conecta->real_escape_string($_POST['Email']);
     $Pass = $Conecta->real_escape_string(md5($_POST['Pass']));
     $Tipo= $Conecta->real_escape_string($_POST['tipo']);
    // echo "Nombre ".$Nombre." Apellido P ".$Ap." Apellido M ".$Am."Telefono ". $Tel. " Email ".$Email. " Password ".$Pass. "Tipo ".$Tipo;
    $Insert ="INSERT INTO usuarios(NomUser,ApUser,AmUser,TelefonoUser,EmailUser,Password,Id_Tuser)
    VALUES('$Nombre','$Ap','$Am','$Tel','$Email','$Pass','$Tipo')";
    $Ejecutar = $Conecta->query($Insert);
      if($Ejecutar > 0){
       echo "Registro Exitoso";
    }
    else{
       echo "Error al registrar";
    }
  }    

?>