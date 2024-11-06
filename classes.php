<?php   

namespace Classes;

use Config\Database;
use PDO;

class User {
    private $conn;
    private $table = 'users';

    public function __construct() {
        $database = new Database ();
        $this->conn = $database->conect();
    }
    public function login($username,$password){
        $query = "SELECT *FROM " . $this->table . " WHERE username = :username LIMIT 1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if($user && password_verify($password, $user ['password'])) {
            session_start();
            $_SESSION['user_id'] = $user['id'];
            return true;
        }
        return false;
    }
    public function is_logged_in() {
        session_start();
        return isset($_SESSION['user_id']);
    }
    public function logout(){
        session_start();
        session_destroy();
    }
}

?>