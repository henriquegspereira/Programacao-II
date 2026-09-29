<?php

class Pedido {
    private array $itens = [];

    public function inserirItem(string $nomeItem, float $preco): void {
        $this->itens[] = [
            'nome' => $nomeItem,
            'preco' => $preco
        ];
    }

    public function listarItens(): void {
        if (empty($this->itens)) {
            echo "O pedido está vazio.\n";
            return;
        }

        echo "Itens do Pedido:\n";
        foreach ($this->itens as $index => $item) {
            $num = $index + 1;
            $precoFormatado = number_format($item['preco'], 2, ',', '.');
            echo "{$num}. {$item['nome']} - R$ {$precoFormatado}\n";
        }
    }
}

// Testando a classe
$pedido = new Pedido();
$pedido->inserirItem("Teclado Mecânico", 250.00);
$pedido->inserirItem("Mouse Gamer", 150.00);

$pedido->listarItens();