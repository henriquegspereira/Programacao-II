<?php

class Retangulo
{
    private float $largura;
    private float $altura;

    public function __construct(float $largura, float $altura)
    {
        $this->largura = $largura;
        $this->altura  = $altura;
    }

    public function calcularArea(): float
    {
        return $this->largura * $this->altura;
    }

    public function calcularPerimetro(): float
    {
        return 2 * ($this->largura + $this->altura);
    }

    public function exibirDados(): string
    {
        return "Largura: {$this->largura} | Altura: {$this->altura} | Área: {$this->calcularArea()} | Perímetro: {$this->calcularPerimetro()}";
    }
}


$r1 = new Retangulo(5.0, 3.0);
$r2 = new Retangulo(10.0, 4.5);

echo "Retângulo 1 -> " . $r1->exibirDados() . PHP_EOL;
echo "Retângulo 2 -> " . $r2->exibirDados() . PHP_EOL;