<?php
include_once 'Database.php';

class Usuario {
    private $conn;
    private $table_name = "usuarios";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function login($email, $senha) {
        $query = "SELECT * FROM " . $this->table_name . " WHERE email = :email";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":email", $email);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($senha, $user['senha'])) {
            return true;
        }

        return false;
    }
}

if ($_POST) {
    $database = new Database();
    $db = $database->getConnection();

    $usuario = new Usuario($db);
    
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if ($usuario->login($email, $senha)) {
        echo "Login realizado com sucesso!";
    } else {
        echo "Email ou senha incorretos.";
    }
}
?>
