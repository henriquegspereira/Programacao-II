<?php

class Produto {
    public string $nome;
    private float $preco;

    public function __construct(string $nome, float $preco) {
        $this->nome = $nome;
        $this->setPreco($preco);
    }

    public function getPreco(): float {
        return $this->preco;
    }

    public function setPreco(float $preco): void {
        if ($preco >= 0) {
            $this->preco = $preco;
        } else {
            throw new Exception("O preço não pode ser negativo.");
        }
    }
}

$produto = new Produto("Smartphone", 2500.00);
echo "Produto: {$produto->nome}\n";
echo "Preço inicial: R$ " . number_format($produto->getPreco(), 2, ',', '.') . "\n";

$produto->setPreco(2300.00);
echo "Novo preço: R$ " . number_format($produto->getPreco(), 2, ',', '.') . "\n";