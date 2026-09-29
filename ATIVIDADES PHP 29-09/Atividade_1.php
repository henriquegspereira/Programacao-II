<?php

class Produto {
    public string $nome;
    public float $preco;

    public function __construct(string $nome, float $preco) {
        $this->nome = $nome;
        $this->preco = $preco;
    }
}

// Instanciando o objeto
$produto = new Produto("Notebook", 3500.00);

// Exibindo os valores
echo "Produto: {$produto->nome}\n";
echo "Preço: R$ " . number_format($produto->preco, 2, ',', '.') . "\n";