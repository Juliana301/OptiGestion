<?php
include_once __DIR__ . '/../Model/LoginModel.php';
include_once __DIR__ . '/../Model/UsuarioModel.php';

if(session_status() == PHP_SESSION_NONE) {
    session_start();
}


?>