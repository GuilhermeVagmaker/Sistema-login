<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/../config/Conexao.php';

class Usuario {
    private $conn;

    public function __construct() {
        $this->conn = (new Conexao())->conectar();
    }

    public function registrar($nome, $email, $senha) {
        // usar a mesma tabela que o login (usuarios)
        $sql = "SELECT id FROM pessoas WHERE email = :email LIMIT 1";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([':email' => $email]);
        if ($stmt->fetch()) {
            return false;
        }

        $hash = password_hash($senha, PASSWORD_DEFAULT);

        $sql = "INSERT INTO pessoas (nome, email, senha) VALUES (:nome, :email, :senha)";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([
            ':nome' => $nome,
            ':email' => $email,
            ':senha' => $hash
        ]);
    }

    public function login($email, $senha) {
        $sql = "SELECT id, nome, email, senha FROM pessoas WHERE email = :email LIMIT 1";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([':email' => $email]);
        $user = $stmt->fetch();
        if (!$user) {
            return false;
        }
        if (password_verify($senha, $user['senha'])) {
            // não chamar session_start() aqui para evitar warning (já iniciado no action)
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_nome'] = $user['nome'];
            $_SESSION['user_email'] = $user['email'];
            return true;
        }
        return false;
    }
}