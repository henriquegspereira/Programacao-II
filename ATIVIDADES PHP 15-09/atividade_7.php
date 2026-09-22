<?php

class Funcionario
{
    private string $nome;
    private float $salario;

    public function __construct(string $nome, float $salario)
    {
        $this->nome    = $nome;
        $this->salario = $salario;
    }

    public function reajustarSalario(float $percentagem): void
    {
        if ($percentagem > 0) {
            $this->salario += $this->salario * ($percentagem / 100);
        }
    }

    public function getDados(): string
    {
        return "Funcionário: {$this->nome} | Salário: R$ " . number_format($this->salario, 2, ',', '.');
    }
}


$funcionario = new Funcionario("Lucas Silva", 3500.00);

echo "Antes do reajuste: " . $funcionario->getDados() . PHP_EOL;

$funcionario->reajustarSalario(15.0);

echo "Após 15% de aumento: " . $funcionario->getDados() . PHP_EOL;