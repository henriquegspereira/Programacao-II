<?php

class ContaBancaria {
    private float $saldo;

    public function __construct(float $saldoInicial) {
        $this->saldo = $saldoInicial;
    }

    public function getSaldo(): float {
        return $this->saldo;
    }

    public function depositar(float $valor): void {
        if ($valor > 0) {
            $this->saldo += $valor;
            echo "Depósito de R$ " . number_format($valor, 2, ',', '.') . " realizado com sucessp!\n";
        } else {
            echo "Valor de depósito inválido.\n";
        }
    }

    public function sacar(float $valor): void {
        if ($valor > 0 && $valor <= $this->saldo) {
            $this->saldo -= $valor;
            echo "Saque de R$ " . number_format($valor, 2, ',', '.') . " realizado com sucesso!\n";
        } else {
            echo "Saldo insuficiente ou valor inválido para saque.\n";
        }
    }
}

// Testando a classe
$conta = new ContaBancaria(1000.00);
echo "Saldo inicial: R$ " . number_format($conta->getSaldo(), 2, ',', '.') . "\n";

$conta->depositar(500.00);
echo "Saldo atual: R$ " . number_format($conta->getSaldo(), 2, ',', '.') . "\n";

$conta->sacar(200.00);
echo "Saldo final: R$ " . number_format($conta->getSaldo(), 2, ',', '.') . "\n";