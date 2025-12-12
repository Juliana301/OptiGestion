<?php
include_once __DIR__ . '/../Model/baseDatos.php';

// Buscar usuario por correo
function BuscarUsuarioPorCorreo($correo) {
    $enlace = AbrirBD();

    $sentencia = $enlace->prepare("CALL Usuario_BuscarPorCorreo(?)");
    $sentencia->bind_param("s", $correo);
    $sentencia->execute();

    $resultado = $sentencia->get_result()->fetch_assoc();

    $sentencia->close();
    CerrarBD($enlace);

    return $resultado;
}

// Guardar token
function GuardarTokenRecuperacion($correo, $token) {
    $enlace = AbrirBD();

    $sentencia = $enlace->prepare("CALL Usuario_GuardarToken(?, ?)");
    $sentencia->bind_param("ss", $correo, $token);
    $sentencia->execute();

    $sentencia->close();
    CerrarBD($enlace);
}

// Validar token
function ObtenerUsuarioPorToken($token) {
    $enlace = AbrirBD();

    $sentencia = $enlace->prepare("CALL Usuario_ObtenerPorToken(?)");
    $sentencia->bind_param("s", $token);
    $sentencia->execute();

    $resultado = $sentencia->get_result()->fetch_assoc();

    $sentencia->close();
    CerrarBD($enlace);

    return $resultado;
}

// Actualizar contraseña
function ActualizarContrasenna($idUsuario, $hash) {
    $enlace = AbrirBD();

    $sentencia = $enlace->prepare("CALL Usuario_ActualizarContrasenna(?, ?)");
    $sentencia->bind_param("is", $idUsuario, $hash);
    $sentencia->execute();

    $sentencia->close();
    CerrarBD($enlace);
}