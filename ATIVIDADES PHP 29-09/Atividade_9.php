<?php

class ContaBancariaRefatorada {
    private float $saldo;

    public function __construct(float $saldoInicial) {
        if ($saldoInicial < 0) {
            throw new Exception("O saldo inicial não pode ser negativo.");
        }
        $this->saldo = $saldoInicial;
    }

    public function getSaldo(): float {
        return $this->saldo;
    }

    public function depositar(float $valor): void {
        if ($valor <= 0) {
            throw new Exception("O valor do depósito deve ser maior que zero.");
        }
        $this->saldo += $valor;
    }

    public function sacar(float $valor): void {
        if ($valor <= 0) {
            throw new Exception("O valor do saque deve ser maior que zero.");
        }
        
        if ($valor > $this->saldo) {
            throw new Exception("Tentativa de saque inválida: Saldo insuficiente.");
        }

        $this->saldo -= $valor;
        echo "Saque de R$ " . number_format($valor, 2, ',', '.') . " realizado com sucesso!\n";
    }
}

// Testando a classe refatorada
try {
    $conta = new ContaBancariaRefatorada(1000.00);
    echo "Saldo inicial: R$ " . number_format($conta->getSaldo(), 2, ',', '.') . "\n";

    // Tentativa de saque com saldo suficiente
    $conta->sacar(400.00);
    echo "Saldo atual: R$ " . number_format($conta->getSaldo(), 2, ',', '.') . "\n";

    // Tentativa de saque com saldo insuficiente
    echo "Tentando sacar R$ 800,00...\n";
    $conta->sacar(800.00);

} catch (Exception $e) {
    echo "Erro capturado: " . $e->getMessage() . "\n";
    echo "Saldo final seguro: R$ " . number_format($conta->getSaldo(), 2, ',', '.') . "\n";
}