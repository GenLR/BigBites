<?php
require_once 'include/autoloader.php';

class User {
    private $db;

    public function __construct() {
        $this->db = (new Database())->getConnection();
    }

    //Add Users (Crud)
    public function register($name, $email, $password) {
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $query = $this->db->prepare("INSERT INTO tbl_user (name, email, pass, acc_type, status) 
                VALUES (:name, :email, :password, :acc_type, :status)");
        $query->execute([
            'name' => $name,
            'email' => $email,
            'password' => $hashedPassword,
            'acc_type' => "customer",
            'status' => "active",
        ]);
        return $this->db->lastInsertId();
    }
    //Get Users (cRud)
    public function login($username, $password) {
        try {
            // Validate input
            if (empty($username) || empty($password)) {
                throw new Exception("Username and Password are required.");
            }

            // Prepare and execute query
            $query = "SELECT * FROM tbl_user WHERE user = :user LIMIT 1";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':user', $username, PDO::PARAM_STR);
            $stmt->execute();
            
            // Fetch user
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            if (!$user  || !password_verify($password, $user['pass'])) {
                throw new Exception("Invalid username or password.");
            }

            // Return user data on successful login
            return $user;
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }  
    
    // Update Users (crUd)
    public function updateUser($userId, $newData) {
        $setClause = [];
        $params = ['id' => $userId];

        if (isset($newData['username'])) {
            $setClause[] = 'username = :username';
            $params['username'] = $newData['username'];
        }

        if (isset($newData['email'])) {
            $setClause[] = 'email = :email';
            $params['email'] = $newData['email'];
        }

        if (isset($newData['password'])) {
            $setClause[] = 'password = :password';
            $params['password'] = password_hash($newData['password'], PASSWORD_BCRYPT);
        }

        if (empty($setClause)) {
            throw new Exception("No fields to update");
        }

        $setQuery = implode(", ", $setClause);
        $query = $this->db->prepare("UPDATE users SET $setQuery WHERE id = :id");
        return $query->execute($params);
    }

    // Delete Users (cruD)
    public function deleteUser($userId) {
        $query = $this->db->prepare("DELETE FROM users WHERE id = :id");
        return $query->execute(['id' => $userId]);
    }

    // V A L I D A T I O N S

    public function isEmailUnique($email) {
        try {
            // Query to count occurrences of the email
            $query = "SELECT COUNT(*) FROM tbl_user WHERE email = :email";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->execute();
            
            // Fetch the result
            $count = $stmt->fetchColumn();
            return $count == 0; // Return true if email does not exist
        } catch (Exception $e) {
            throw new Exception("Error checking email: " . $e->getMessage());
        }
    }
}
?>
