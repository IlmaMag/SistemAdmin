<?php 
include 'app/Conect.php';
include 'app/querys.php'; 
include 'app/Acciones.php';
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Registro</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>


    <body>
        <h1 class="text-center">Hola bienvenido al mundo de desarrollo web</h1>
        <div class="container justify-content-center">
            <div class="col-sm-10 col-md-10 col-lg-10">
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                    <div class="row mt-2">
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <input type="text" name="Nombre" id="" placeholder="Nombre" class="form-control" required>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <input type="text" name="Ap" id="" placeholder="Apellido Paterno" class="form-control" required>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <input type="text" name="Am" id="" placeholder="Apellido Materno" class="form-control" required>
                        </div>           
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <input type="tel" name="Tel" id="" placeholder="Telefono" class="form-control" required>
                        </div>   
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <input type="email" name="Email" id="" placeholder="Email" class="form-control" required>
                        </div>    
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <input type="password" name="Pass" id="" placeholder="Password" class="form-control" required>
                        </div>   
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <select class="form-select" name="tipo" aria-label="Default select example" required>
                                <option selected>Selecciona una opcion</option>
                                <?php while($Linea = $Ejecuta->fetch_assoc()) { ?>

                                <option value="<?php echo $Linea['Id_Tuser'] ?>"><?php echo $Linea['NomTUser']; ?></option>
                                
                                <?php } ?>
                            </select>
                        </div>    
                    </div>
                    <div class="row mt-2">
                        <input type="submit" value="Registrar" name="BatnRegistra" class="btn btn-sm btn-success">
                    </div>
                </form>
            </div>
        </div>

        <script src="js/bootstrap.min.js"></script>
    </body>
</html>