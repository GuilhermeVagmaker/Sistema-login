<?php

class Conexao {

    private $host = "localhost"; 
    private $dbname = "usuarios";
    private $user = "root";
    private $pass = "senha12345";
    private static $conn;


    public function conectar() {
            if(!isset(self::$conn)){
                try {
                    self::$conn = new PDO(
                        "mysql:host={$this->host};dbname={$this->dbname};charset=utf8",
                        $this->user,
                        $this->pass
                );
                self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo "❌ Falha na conexão: " . $e->getMessage(); 
            }
        }   

        return self::$conn;
    }
}
