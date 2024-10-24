<?php
// config.php

// Configuración de la base de datos
define('DB_HOST', 'localhost');
define('DB_NAME', 'ejercicio1');
define('DB_USER', 'root');
define('DB_PASS', '');

// URL base del proyecto
define('BASE_URL', 'http://localhost/ejercicio1');

// Configuración de errores (cambia a 0 en producción)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Función para conectar a la base de datos
function getDBConnection() {
    try {
        $conn = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch(PDOException $e) {
        die("Error de conexión: " . $e->getMessage());
    }
}