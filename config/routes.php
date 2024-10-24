<?php
$routes = [
    '' => ['controller' => 'HomeController', 'action' => 'index'],
    'user_management' => ['controller' => 'UserManagementController', 'action' => 'index'],
    'user_management/create' => ['controller' => 'UserManagementController', 'action' => 'create'],
    'user_management/edit' => ['controller' => 'UserManagementController', 'action' => 'edit'],
    'user_management/delete' => ['controller' => 'UserManagementController', 'action' => 'delete'],
];

function route($url) {
    global $routes;
    $url = trim($url, '/');
    if (array_key_exists($url, $routes)) {
        return $routes[$url];
    }
    // Manejo de ruta no encontrada
    return ['controller' => 'ErrorController', 'action' => 'notFound'];
}