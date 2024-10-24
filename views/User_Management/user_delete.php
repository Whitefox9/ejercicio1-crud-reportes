<?php
require_once '../../config/config.php';
require_once '../../models/UserManagementModel.php';
require_once '../../controllers/UserManagementController.php';

$db = getDBConnection();
$userManagementModel = new UserManagementModel($db);
$userManagementController = new UserManagementController($userManagementModel);

if (isset($_GET['id'])) {
    $userId = $_GET['id'];
    $result = $userManagementController->deleteUser($userId);
    if ($result['success']) {
        header('Location: index.php?message=' . urlencode($result['message']));
    } else {
        header('Location: index.php?error=' . urlencode($result['message']));
    }
    exit;
} else {
    header('Location: index.php?error=ID de usuario no proporcionado');
    exit;
}
?>