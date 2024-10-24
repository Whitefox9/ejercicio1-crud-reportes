<?php
// controllers/UserController.php

require_once __DIR__ . '/../models/UserModel.php';

class UserController {
    private $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
    }

    public function register() {
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action']) && $_POST['action'] == 'register') {
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $role = $_POST['role'];

            // Validación básica
            if (empty($first_name) || empty($last_name) || empty($email) || empty($password) || empty($role)) {
                header("Location: " . BASE_URL . "/views/pages/register.php?error=empty_fields");
                exit();
            }

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                header("Location: " . BASE_URL . "/views/pages/register.php?error=invalid_email");
                exit();
            }

            // Verificar si el email ya existe
            if ($this->userModel->getUserByEmail($email)) {
                header("Location: " . BASE_URL . "/views/pages/register.php?error=email_exists");
                exit();
            }

            // Intentar crear el usuario
            $userId = $this->userModel->createUser($first_name, $last_name, $email, $password, $role);

            if ($userId) {
                header("Location: " . BASE_URL . "/views/pages/login.php?registered=true");
                exit();
            } else {
                header("Location: " . BASE_URL . "/views/pages/register.php?error=registration_failed");
                exit();
            }
        } else {
            // Si no es una solicitud POST de registro, redirigir a la página de registro
            header("Location: " . BASE_URL . "/views/pages/register.php");
            exit();
        }
    }

    public function login() {
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action']) && $_POST['action'] == 'login') {
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Validación básica
            if (empty($email) || empty($password)) {
                header("Location: " . BASE_URL . "/views/pages/login.php?error=empty_fields");
                exit();
            }

            $user = $this->userModel->getUserByEmailAndPassword($email, $password);

            if ($user) {
                // Iniciar sesión
                session_start();
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_role'] = $user['role'];

                // Redireccionar basado en el rol
                if ($user['role'] == '2') { // Administrador
                    header("Location: " . BASE_URL . "/views/admin/dashboard.php");
                } else { // Usuario normal
                    header("Location: " . BASE_URL . "/index.php");
                }
                exit();
            } else {
                header("Location: " . BASE_URL . "/views/pages/login.php?error=invalid_credentials");
                exit();
            }
        } else {
            // Si no es una solicitud POST de login, redirigir a la página de login
            header("Location: " . BASE_URL . "/views/pages/login.php");
            exit();
        }
    }

    public function logout() {
        session_start();
        session_destroy();
        header("Location: " . BASE_URL . "/index.php");
        exit();
    }
}

// Manejar la solicitud
$controller = new UserController();
if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'register':
            $controller->register();
            break;
        case 'login':
            $controller->login();
            break;
        case 'logout':
            $controller->logout();
            break;
    }
}