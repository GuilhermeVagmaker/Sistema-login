<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
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
