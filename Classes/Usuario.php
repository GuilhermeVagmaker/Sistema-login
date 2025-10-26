<?php

require_once 'conexao.php';

class Usuario {
    private $conn;
    public $msg;

    public function __construct() {
        $this->conn = (new Conexao())->conectar();
    }

    public function registrar($nome, $email, $senha) {
        // Verifica se o email já existe
        $sql = "SELECT * FROM usuarios WHERE email = :email";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":email", $email);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
           return $msg = "Email já cadastrado!";
        }

        // Criptografa a senha
        $senhaCript = password_hash($senha, PASSWORD_DEFAULT);

        // Insere novo usuário
        $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":senha", $senhaCript);

        if ($stmt->execute()) {
            return $msg  = "Usuário registrado com sucesso!";
        } else {
            return $msg = "Erro ao registrar usuário!";
        }
    }

    public function login($email, $senha) {
        $sql = "SELECT * FROM usuarios WHERE email = :email";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":email", $email);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

            if (password_verify($senha, $usuario['senha'])) {
                // Login ok
                return $msg = "Login efetuado com sucesso!";
            } else {
                return $msg = "Senha incorreta!";
            }
        } else {
            return $msg = "Email não encontrado!";
        }
    }
}
