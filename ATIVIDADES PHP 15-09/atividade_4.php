<?php

class Calculadora
{
    public function somar(float $a, float $b): float
    {
        return $a + $b;
    }

    public function subtrair(float $a, float $b): float
    {
        return $a - $b;
    }

    public function multiplicar(float $a, float $b): float
    {
        return $a * $b;
    }

    public function dividir(float $a, float $b): float|string
    {
        if ($b == 0.0) {
            return "Erro: Divisão por zero não é permitida.";
        }

        return $a / $b;
    }
}


$calc = new Calculadora();

echo "Soma (10 + 5): " . $calc->somar(10, 5) . PHP_EOL;
echo "Subtração (10 - 5): " . $calc->subtrair(10, 5) . PHP_EOL;
echo "Multiplicação (10 * 5): " . $calc->multiplicar(10, 5) . PHP_EOL;
echo "Divisão (10 / 5): " . $calc->dividir(10, 5) . PHP_EOL;
echo "Divisão por zero (10 / 0): " . $calc->dividir(10, 0) . PHP_EOL;