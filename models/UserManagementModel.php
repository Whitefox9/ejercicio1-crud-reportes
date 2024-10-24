<?php
class UserManagementModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function createUser($userData) {
        $first_name = $userData['first_name'];
        $last_name = $userData['last_name'];
        $email = $userData['email'];
        $password = password_hash($userData['password'], PASSWORD_DEFAULT);
        $role = $userData['role'];
        $created_at = date('Y-m-d H:i:s');
        $updated_at = date('Y-m-d H:i:s');

        $query = "INSERT INTO users (first_name, last_name, email, password, role, created_at, updated_at) 
                  VALUES (:first_name, :last_name, :email, :password, :role, :created_at, :updated_at)";
        
        try {
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':first_name', $first_name);
            $stmt->bindParam(':last_name', $last_name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);
            $stmt->bindParam(':role', $role);
            $stmt->bindParam(':created_at', $created_at);
            $stmt->bindParam(':updated_at', $updated_at);
            
            $stmt->execute();
            return $this->db->lastInsertId();
        } catch(PDOException $e) {
            // Aquí podrías loguear el error
            return false;
        }
    }

    public function getAllUsers() {
        $query = "SELECT id, CONCAT(first_name, ' ', last_name) AS nombre, email, 
                  CASE WHEN role = 1 THEN 'Usuario' ELSE 'Admin' END AS rol 
                  FROM users ORDER BY id";
        
        try {
            $stmt = $this->db->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch(PDOException $e) {
            // Aquí podrías loguear el error
            return false;
        }
    }

    public function getUserById($id) {
        $query = "SELECT * FROM users WHERE id = :id";
        try {
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch(PDOException $e) {
            return false;
        }
    }

    public function updateUser($userData) {
        $query = "UPDATE users SET first_name = :first_name, last_name = :last_name, 
                  email = :email, role = :role, updated_at = NOW() 
                  WHERE id = :id";
        try {
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':id', $userData['id'], PDO::PARAM_INT);
            $stmt->bindParam(':first_name', $userData['first_name']);
            $stmt->bindParam(':last_name', $userData['last_name']);
            $stmt->bindParam(':email', $userData['email']);
            $stmt->bindParam(':role', $userData['role'], PDO::PARAM_INT);
            return $stmt->execute();
        } catch(PDOException $e) {
            return false;
        }
    }

    public function deleteUser($id) {
        $query = "DELETE FROM users WHERE id = :id";
        try {
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            return $stmt->execute();
        } catch(PDOException $e) {
            return false;
        }
    }
}

