<?php
class UserManagementController {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function createUser($userData) {
        // Validación básica
        if (empty($userData['first_name']) || empty($userData['last_name']) || empty($userData['email']) || empty($userData['password']) || empty($userData['role'])) {
            return ['success' => false, 'message' => 'Todos los campos son obligatorios.'];
        }

        // Validar el email
        if (!filter_var($userData['email'], FILTER_VALIDATE_EMAIL)) {
            return ['success' => false, 'message' => 'El email no es válido.'];
        }

        // Validar el rol
        if (!in_array($userData['role'], [1, 2])) {
            return ['success' => false, 'message' => 'El rol seleccionado no es válido.'];
        }

        // Intentar crear el usuario
        $result = $this->model->createUser($userData);

        if ($result) {
            return ['success' => true, 'message' => 'Usuario creado con éxito.', 'user_id' => $result];
        } else {
            return ['success' => false, 'message' => 'Error al crear el usuario. Por favor, inténtelo de nuevo.'];
        }
    }

    public function updateUser($userData) {
        // Validación básica
        if (empty($userData['first_name']) || empty($userData['last_name']) || empty($userData['email']) || empty($userData['role'])) {
            return ['success' => false, 'message' => 'Todos los campos son obligatorios.'];
        }

        // Validar el email
        if (!filter_var($userData['email'], FILTER_VALIDATE_EMAIL)) {
            return ['success' => false, 'message' => 'El email no es válido.'];
        }

        // Validar el rol
        if (!in_array($userData['role'], [1, 2])) {
            return ['success' => false, 'message' => 'El rol seleccionado no es válido.'];
        }

        $result = $this->model->updateUser($userData);
        if ($result) {
            return ['success' => true, 'message' => 'Usuario actualizado con éxito.'];
        } else {
            return ['success' => false, 'message' => 'Error al actualizar el usuario.'];
        }
    }

    public function deleteUser($id) {
        $result = $this->model->deleteUser($id);
        if ($result) {
            return ['success' => true, 'message' => 'Usuario eliminado con éxito.'];
        } else {
            return ['success' => false, 'message' => 'Error al eliminar el usuario.'];
        }
    }
}