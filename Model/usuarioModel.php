<?php
   
    include_once __DIR__ . '/../Model/baseDatos.php';

//registro de personal (aun no funciona)
function RegistrarPersonalModel($Cedula, $Nombre, $Apellido, $ApellidoDos, $correoElectronico, $contrasenna, $telefono, $direccion)
{
    try {
        $enlace = AbrirBD();

        
        $sentencia = $enlace->prepare("CALL RegistrarPersonal(?, ?, ?, ?, ?, ?, ?, ?)");

        if(!$sentencia){
            throw new Exception("Error al preparar la consulta: " . $enlace->error);
        }

        // Hash de contraseña
        $hashContrasenna = hash('sha256', $contrasenna);

        $sentencia->bind_param("ssssssss", $Cedula, $Nombre, $Apellido, $ApellidoDos, $correoElectronico, $hashContrasenna, $telefono, $direccion);

        $sentencia->execute();

        // ese sirve para capturar resultado si el procedimiento tiene OUT parameters
        $select = $enlace->query("SELECT @p_Resultado as resultado, @p_Mensaje as mensaje");
        $result = $select ? $select->fetch_assoc() : array('resultado' => 1, 'mensaje' => 'Registro ejecutado');

        $sentencia->close();
        CerrarBD($enlace);

        return $result;

    } catch(Exception $ex) {
        return array('resultado' => 0, 'mensaje' => 'Error en el servidor: '.$ex->getMessage());
    }
}
 // Registra los pacientes (aun no funciona)
function RegistrarPacienteModel($Cedula, $Nombre, $Apellido, $ApellidoDos, $correoElectronico, $contrasenna, $telefono, $direccion, $FechaNacimiento)
{
    try {
        $enlace = AbrirBD();

        
        $sentencia = $enlace->prepare("CALL RegistrarPaciente(?, ?, ?, ?, ?, ?, ?, ?, ?)");

        if (!$sentencia) {
            throw new Exception("Error al preparar la consulta: " . $enlace->error);
        }

        
        $hashContrasenna = hash('sha256', $contrasenna);

        
        $sentencia->bind_param( "sssssssss", $Cedula, $Nombre, $Apellido, $ApellidoDos, $correoElectronico, $hashContrasenna, $direccion, $FechaNacimiento );

       
        $sentencia->execute();

        
        $select = $enlace->query("SELECT @p_Resultado as resultado, @p_Mensaje as mensaje");
        $result = $select ? $select->fetch_assoc() : array('resultado' => 1, 'mensaje' => 'Registro ejecutado');

        $sentencia->close();
        CerrarBD($enlace);

        return $result;

    } catch (Exception $ex) {
        return array('resultado' => 0, 'mensaje' => 'Error en el servidor: ' . $ex->getMessage());
    }
}

  
?>