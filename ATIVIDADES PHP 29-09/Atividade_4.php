<?php

class Funcionario {
    protected float $salario;

    public function __construct(float $salario) {
        $this->salario = $salario;
    }

    public function getSalario(): float {
        return $this->salario;
    }
}

class Gerente extends Funcionario {
    public function alterarSalario(float $novoSalario): void {
        if ($novoSalario >= 0) {
            $this->salario = $novoSalario;
        } else {
            throw new Exception("O salário não pode ser negativo.");
        }
    }
}

// Testando a classe
$gerente = new Gerente(5000.00);
echo "Salário inicial do gerente: R$ " . number_format($gerente->getSalario(), 2, ',', '.') . "\n";

$gerente->alterarSalario(6500.00);
echo "Novo salário do gerente: R$ " . number_format($gerente->getSalario(), 2, ',', '.') . "\n";