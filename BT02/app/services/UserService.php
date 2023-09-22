<?php
require_once APP_ROOT . '/app/models/User.php';
class UserService
{
    public function getAllUsers()
    {
        try {
            $conn = new PDO('mysql:host=localhost;dbname=user', 'root', '442003');
            $sql = "SELECT * FROM users LIMIT 10";
            $stmt = $conn->query($sql);
            $users = [];
            while ($row = $stmt->fetch()) {
                $user = new User($row['FullName'], $row['Email'], $row['Gender'], $row['Groups'], $row['Mobile'], $row['DateOfBirth']);
                $users[] = $user;
            }
            return $users;
        } catch (PDOException $e) {
            return $users = [];
        }
    }

    public function addUser()
    {
    }
}
