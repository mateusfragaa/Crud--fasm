<?php
class Conexao {
    private $dbname = "";
    private $root = "";
    private $password = "";

    public function conecte() {
        try {
            $conexao = new PDO(
                "mysql:host=;dbname=$this->dbname",
                $this->root,
                $this->password
            );
            $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conexao;
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            return null;
        }
    }
}
