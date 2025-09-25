<?php

include_once __DIR__ . '/../Model/loginModel.php';
include_once __DIR__ . '/../Model/usuarioModel.php';


if(session_status() == PHP_SESSION_NONE) {
    session_start();
}


if(isset($_GET["cerrarSesion"])) {
    
    $_SESSION = array();
    session_destroy();

    header('Location: /OptiGestion/View/iniciarSesion.php');
    exit();
}

// para el inicio de sesión
if(isset($_POST["btnIniciarSesion"])) {

    $correo = $_POST["email"] ?? '';
    $contrasenna = $_POST["password"] ?? '';

    if(empty($correo) || empty($contrasenna)) {
        $_SESSION["txtMensaje"] = "Debe ingresar correo y contraseña.";
    } else {
        $usuario = IniciarSesionModel($correo, $contrasenna);

        if($usuario) {
             
                $_SESSION["UsuarioID"] = $usuario["IdUsuario"];
                $_SESSION["Nombre"] = $usuario["Nombre"];
                $_SESSION["Apellido"] = $usuario["Apellido"];
                $_SESSION["ApellidoDos"] = $usuario["ApellidoDos"];
                $_SESSION["CorreoElectronico"] = $usuario["CorreoElectronico"];
                $_SESSION["Telefono"] = $usuario["Telefono"];
                $_SESSION["Direccion"] = $usuario["Direccion"];
                $_SESSION["RolID"] = $usuario["RolUsuario"]; //este es para separar entre paciente y empleado
                 $_SESSION['EmpleadoRol'] = $usuario['RolEmpleado'] ?? null;
               
                 header('Location: /OptiGestion/index.php');
                exit();

            } else {
                $_SESSION["txtMensaje"] = "Correo electrónico o contraseña incorrectos.";
            }
        } 
    }

?>