<?php

class Item
{
    private string $nome;
    private float $quantidade;
    private float $precoUnitario;

    public function __construct(string $nome, float $quantidade, float $precoUnitario)
    {
        $this->nome          = $nome;
        $this->quantidade    = $quantidade;
        $this->precoUnitario = $precoUnitario;
    }

    public function calcularSubtotal(): float
    {
        return $this->quantidade * $this->precoUnitario;
    }

    public function getDetalhes(): string
    {
        return "Item: {$this->nome} | Qtd: {$this->quantidade} | Preço Un: R$ " . number_format($this->precoUnitario, 2, ',', '.') . " | Subtotal: R$ " . number_format($this->calcularSubtotal(), 2, ',', '.');
    }
}

class Carrinho
{
    /** @var Item[] */
    private array $itens = [];

    public function adicionarItem(Item $item): void
    {
        $this->itens[] = $item;
    }

    public function calcularTotal(): float
    {
        $total = 0.0;
        foreach ($this->itens as $item) {
            $total += $item->calcularSubtotal();
        }
        return $total;
    }

    public function listarItens(): void
    {
        echo "--- ITENS DO CARRINHO ---" . PHP_EOL;
        foreach ($this->itens as $item) {
            echo $item->getDetalhes() . PHP_EOL;
        }
        echo "Total da Compra: R$ " . number_format($this->calcularTotal(), 2, ',', '.') . PHP_EOL;
    }
}


$carrinho = new Carrinho();

$item1 = new Item("Teclado Mecânico", 1, 250.00);
$item2 = new Item("Mousepad Gamer", 2, 45.50);
$item3 = new Item("Café Especial (kg)", 0.5, 60.00);

$carrinho->adicionarItem($item1);
$carrinho->adicionarItem($item2);
$carrinho->adicionarItem($item3);

$carrinho->listarItens();