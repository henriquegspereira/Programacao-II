<?php

class Cliente {
    public string $nome;
    protected string $cpf;
    private string $telefone;

    public function __construct(string $nome, string $cpf, string $telefone) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->telefone = $telefone;
    }

    // Método para testar acessos dentro da classe
    public function testarAcessosInternos(): void {
        echo "--- Acessos Dentro da Classe ---\n";
        echo "Nome (public): {$this->nome}\n";
        echo "CPF (protected): {$this->cpf}\n";
        echo "Telefone (private): {$this->telefone}\n";
    }

    public function getTelefone(): string {
        return $this->telefone;
    }
}

class ClienteVip extends Cliente {
    public function testarAcessosSubclasse(): void {
        echo "\n--- Acessos na Subclasse (Herança) ---\n";
        echo "Nome (public): {$this->nome}\n";
        echo "CPF (protected): {$this->cpf}\n";
        // echo $this->telefone; // ERRO: telefone é privado, subclasses não acessam!
    }
}

// Testando acessos fora da classe
$cliente = new ClienteVip("Carlos Silva", "123.456.789-00", "(49) 99999-9999");

echo "--- Acessos Fora da Classe (Código Cliente) ---\n";
echo "Nome (public): {$cliente->nome}\n"; // Permitido

// Testando métodos internos e da subclasse
$cliente->testarAcessosInternos();
$cliente->testarAcessosSubclasse();

// Tentativas de acesso direto fora da classe que gerariam erro:
// echo $cliente->cpf;      // ERRO: Atributo protegido não pode ser acessado fora
// echo $cliente->telefone; // ERRO: Atributo privado não pode ser acessado fora
// A forma correta de obter o telefone privado externamente é usando o getter:
echo "\nTelefone obtido via Getter público: " . $cliente->getTelefone() . "\n";