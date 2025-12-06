<?php
    // Iniciamos sesión aquí para usarla en todo el proyecto
    session_start();

    $conexion = @mysqli_connect(
        'localhost',
        'root',       // TU USUARIO (usualmente root)
        'Ubuntu12',   // TU CONTRASEÑA (la que vi en tu archivo anterior)
        'dashboard_recursos' // <--- ¡AQUÍ EL CAMBIO IMPORTANTE!
    );

    // Verificar conexión
    if(!$conexion) {
        die('Error de conexión: ' . mysqli_connect_error());
    }
    
    // Forzar caracteres UTF-8 para que no salgan símbolos raros
    $conexion->set_charset("utf8");
?>