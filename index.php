<?php 
include 'app/Conect.php';
include 'app/querys.php'; 
include 'app/Acciones.php';
include 'include/ProLogin.php';
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Inicio de Sistema | IlmaMagda </title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/dark.css">
        <script src="js/jquery-3.7.1.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>


    <body>
       <div class="row justify-content-center mt-5">
            <div class="col-md-10 col-lg-6 px-2 mt-3">
                <h3 class="mb-4 text-center mt-3">Inicio de sesion</h3>
            </div>
            <div class="row py-1"> 
                <div class="col"></div>
                <div class="col"></div>
                <div class="col">
                    <div class="form-check form-switch">
                        <input type="checkbox" id="darkSwitch" class="form-check-input"> 
                        <label for="darkSwitch" class="form-check-label">
                            <svg class="bi" width="22" height="22" fill="currentColor">
                                <use xlink:href="library/icons/bootstrap-icons.svg#brightness-low"/>
                            </svg>
                        </label>
                            <svg class="bi" width="16" height="16" fill="currentColor">
                                <use xlink:href="library/icons/bootstrap-icons.svg#moon-stars"/>
                            </svg>
                    </div>
                </div>
            </div>


            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="FormLogin">
                <div class="input-group mb-3 mt-1">
                    <span class="input-group-text" id="User">
                        <svg class="bi" width="15" height="15" fill="currentColor">
                            <use xlink:href="library/icons/bootstrap-icons.svg#person-fill-check" />
                        </svg>
                    </span>
                    <input type="email" name="email" class="form-control" placeholder="Email" aria-label="Usuario" required />
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="Pas">
                        <svg class="bi" width="15" height="15" fill="currentColor">
                            <use xlink:href="library/icons/bootstrap-icons.svg#lock-fill" />
                        </svg>
                    </span>
                    <input type="password" name="password" class="form-control" placeholder="Password" id="VerPassWord" aria-label="Password" required />
                </div>

                <div class="row py-1 px-1">
                    <div class="col">
                        <div class="form-check form-switch">
                            <input type="checkbox" id="VerPass" class="form-check-input" onclick="verPass(this);"> 
                            <label for="VerPass" class="form-check-label">
                                Visualizar Password
                            </label>
                        </div>
                    </div>
                    <div class="col">
                        <svg class="bi" width="15" height="15" fill="currentColor">
                            <use xlink:href="library/icons/bootstrap-icons.svg#key-fill" />
                        </svg>&nbsp;&nbsp;¿Perdistes tu Password?
                    </div>
                </div>
                <div class="d-grid gap-2 mt-1">
                    <input type="submit" name="BtnLogin" value="Ingresar" class="btn btn-sm btn-success rounded-pill">

                </div>
            </form>
            
            








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
            <div class="row py-1 px-2 mt-3">
                <div class="col container">
                    <?php echo $alerta ?>
                </div>
            </div>

        </div>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/dark-mode.js"></script>
        <script>
            function verPass(ck){
               if(ck.checked)
                 $('#VerPassWord').attr("type","text");
                 else
                 $('#VerPassWord').attr("type","passWord"); 
            }          
        </script>
    </body>
</html>