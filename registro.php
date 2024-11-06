<?php
include_once 'Database.php';

class Usuario {
    private $conn;
    private $table_name = "usuarios";

    public $nome;
    public $email;
    public $senha;

    public function __construct($db){
        $this->conn = $db;
    }
    public function cadastrar() {
        $query = "INSERT INTO " . $this->table_name . " (nome,email,senha) VALUES (:nome, :email , :senha)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":nome", $this->nome);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":senha", $this->senha);

        return $stmt->execute();
    }

}

if ($_POST) {
    $database = new Database();
    $db = $database->getConnection();

    $usuario = new Usuario($db);
    $usuario->nome = $_POST['nome'];
    $usuario->email = $_POST['email'];
    $usuario->senha = $_POST['senha'];

    if($usuario->cadastrar()) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro ao cadastra usuário.";
    }

}

?>