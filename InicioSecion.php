<?php 
include 'app/Conect.php';
include 'app/querys.php';
include 'app/Acciones.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Consulta para obtener el usuario con el email proporcionado
    $query = "SELECT * FROM usuarios WHERE email = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['nombre'];
        header("Location: dashboard.php"); // Redirige al dashboard o página principal
        exit;
    } else {
        $error = "Email o contraseña incorrectos.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
</head>
<body>
    <div class="container justify-content-center">
        <div class="col-sm-10 col-md-10 col-lg-10">
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                <div class="row mt-2">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <input type="email" name="email" id="" placeholder="Email" class="form-control" required>
                    </div>   
                </div>
                <div class="row mt-2">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <input type="password" name="password" id="" placeholder="Password" class="form-control" required>
                    </div>   
                </div>
                <div class="row mt-2">
                    <input type="submit" value="Iniciar Sesión" class="btn btn-sm btn-success">
                </div>
                <?php if (isset($error)) { ?>
                    <div class="row mt-2">
                        <div class="col-sm-12">
                            <div class="alert alert-danger" role="alert">
                                <?php echo $error; ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </form>
        </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
