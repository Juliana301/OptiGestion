<?php

   include_once __DIR__ . '/../Model/baseDatos.php';

    //Iniciar Sesión

function IniciarSesionModel($correo, $contrasenna)
{
    try {
        $enlace = AbrirBD();

      
        $sentencia = $enlace->prepare("CALL IniciarSesion(?, ?)");

        if (!$sentencia) {
            throw new Exception("Error al preparar la consulta: " . $enlace->error);
        }

        $sentencia->bind_param("ss", $correo, $contrasenna);
        $sentencia->execute();

        $resultado = $sentencia->get_result();
        $usuario = $resultado->fetch_assoc(); //ese es para d¿que devuelva null si no hay usuario

        $sentencia->close();
        CerrarBD($enlace);

        return $usuario; 

    } catch(Exception $ex) {
        return null;
    }
}


?>