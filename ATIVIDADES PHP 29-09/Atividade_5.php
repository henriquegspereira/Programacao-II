<?php

class Usuario {
    private string $senha;

    public function __construct(string $senha) {
        $this->senha = password_hash($senha, PASSWORD_DEFAULT);
    }

    public function verificarSenha(string $senhaDigitada): bool {
        return password_verify($senhaDigitada, $this->senha);
    }
}

// Testando a classe
$usuario = new Usuario("minhaSenha123");

// Testando senha correta
$testeCorreto = $usuario->verificarSenha("minhaSenha123");
echo "Tentativa com senha correta: " . ($testeCorreto ? "Verdadeiro (true)" : "Falso (false)") . "\n";

// Testando senha incorreta
$testeIncorreto = $usuario->verificarSenha("senhaErrada");
echo "Tentativa com senha incorreta: " . ($testeIncorreto ? "Verdadeiro (true)" : "Falso (false)") . "\n";