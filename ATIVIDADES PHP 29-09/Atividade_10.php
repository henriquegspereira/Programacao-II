<?php

class ConexaoBD {
    private ?PDO $conexao = null;

    public function __construct() {
        $this->conectar();
    }

    private function conectar(): void {
        try {
            $this->conexao = new PDO('sqlite::memory:');
            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erro na conexão: " . $e->getMessage());
        }
    }

    public function getConexao(): PDO {
        return $this->conexao;
    }
}

// Testando a classe
try {
    $db = new ConexaoBD();
    $conexao = $db->getConexao();
    
    if ($conexao instanceof PDO) {
        echo "Conexão obtida com sucesso através do método público getConexao()!\n";
    }
} catch (Exception $e) {
    echo "Erro: " . $e->getMessage() . "\n";
}