<?php
include_once __DIR__ . '/../Model/LoginModel.php';
include_once __DIR__ . '/../Model/UsuarioModel.php';

if(session_status() == PHP_SESSION_NONE) {
    session_start();
}


// Registro de paciente
if(isset($_POST["btnRegistrarPaciente"])) {
    $nombre = $_POST["Name"];
    $apellido = $_POST["LastName"];
    $apellidoDos = $_POST["SecondLastName"];
    $correoElectronico = $_POST["Email"];
    $contrasenna = $_POST["Password"];
    $confirmarContrasenna = $_POST["ConfirmPassword"];
    $telefono = $_POST["Phone"];
    $direccion = $_POST["Address"];
    $fechaNacimiento = $_POST["FechaNacimiento"];  

    
    if($contrasenna != $confirmarContrasenna) {
        $_SESSION["txtMensaje"] = "Las contraseñas no coinciden.";
    } else {
        
        $resultadoReg = RegistrarPacienteModel( $cedula, $nombre, $apellido, $apellidoDos, $correoElectronico, $contrasenna,$telefono, $direccion, $fechaNacimiento
        );

        if(isset($resultadoReg['resultado']) && $resultadoReg['resultado'] == 1) {
            $_SESSION["txtMensaje"] = "Registro exitoso.";
            $_SESSION["registroExitoso"] = true;
        } else {
            $_SESSION["txtMensaje"] = $resultadoReg['mensaje'] ?? "Error en el registro.";
        }
    }

    return;
}

// Registro de empleado
if(isset($_POST["btnRegistrarPersonal"])) {
    $nombre = $_POST["Name"];
    $apellido = $_POST["LastName"];
    $apellidoDos = $_POST["SecondLastName"];
    $correoElectronico = $_POST["Email"];
    $contrasenna = $_POST["Password"];
    $confirmarContrasenna = $_POST["ConfirmPassword"];
    $telefono = $_POST["Phone"];
    $direccion = $_POST["Address"];
    $rolId = $_POST["RolId"]; 

 
    if($contrasenna != $confirmarContrasenna) {
        $_SESSION["txtMensaje"] = "Las contraseñas no coinciden.";
    } else {
        
        $resultadoReg = RegistrarPersonalModel( $cedula, $nombre, $apellido, $apellidoDos, $correoElectronico, $contrasenna, $telefono, $direccion
        );

        if(isset($resultadoReg['resultado']) && $resultadoReg['resultado'] == 1) {
            $_SESSION["txtMensaje"] = "Personal registrado exitosamente.";
            $_SESSION["registroExitoso"] = true;
        } else {
            $_SESSION["txtMensaje"] = $resultadoReg['mensaje'] ?? "Error en el registro.";
        }
    }

    return;
}
?>