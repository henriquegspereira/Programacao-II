<?php

class ContaBancaria
{
    private string $titular;
    private float $saldo;

    public function __construct(string $titular, float $saldoInicial = 0.0)
    {
        $this->titular = $titular;
        $this->saldo   = $saldoInicial;
    }

    public function depositar(float $valor): void
    {
        if ($valor > 0) {
            $this->saldo += $valor;
        }
    }

    public function sacar(float $valor): bool
    {
        if ($valor > 0 && $this->saldo >= $valor) {
            $this->saldo -= $valor;
            return true;
        }

        return false;
    }

    public function getSaldoFormatado(): string
    {
        return "Titular: {$this->titular} | Saldo atual: R$ " . number_format($this->saldo, 2, ',', '.');
    }
}

$conta = new ContaBancaria("Henrique Gabriel", 500.00);

$conta->depositar(250.50);

$conta->sacar(100.00);

$conta->sacar(1000.00);

echo $conta->getSaldoFormatado() . PHP_EOL;