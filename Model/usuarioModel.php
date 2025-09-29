<?php
   
    include_once __DIR__ . '/../Model/baseDatos.php';



function ObtenerPerfil($idUsuario){
    try{
        $enlace = AbrirBD();
        $sentencia = $enlace->prepare("CALL ObtenerPerfilUsuario(?)");
        
        $sentencia->bind_param("i", $idUsuario);
        $sentencia->execute();
        
        $resultado = $sentencia->get_result();
        $usuario = $resultado->fetch_assoc();
        
        $sentencia->close();
        CerrarBD($enlace);
        return $usuario;

    }catch(Exception $ex){
        return [];
    }
    }

    

function EditarPerfil($idUsuario, $cedula, $nombre, $apellido, $apellidoDos, $correoElectronico, $telefono, $direccion, $fechaNacimiento = null){
    try{
        $enlace = AbrirBD();
        $sentencia = $enlace->prepare("CALL EditarPerfil(?, ?, ?, ?, ?, ?, ?, ?, ?)");
       
        $sentencia->bind_param("issssssss",
        $idUsuario,
        $cedula,
        $nombre,
        $apellido,
        $apellidoDos,
        $correoElectronico,
        $telefono,
        $direccion,
        $fechaNacimiento);

    $sentencia->execute();
    $sentencia->close();
    CerrarBD($enlace);

    return['resultado'=>1, 'mensaje'=>'Perfil actualizado con éxito'];
    } catch(Exception $ex){
        return ['resultado'=>0, 'mensaje'=>'Error en el servidor: '.$ex->getMessage()];
    }
        
}
?>