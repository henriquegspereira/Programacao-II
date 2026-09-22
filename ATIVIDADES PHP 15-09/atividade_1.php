<?php

class Carro 
{
    private string $modelo;
    private string $marca;
    private int $ano;

    public function __construct(string $modelo, string $marca, int $ano) 
    {
        $this->modelo = $modelo;
        $this->marca = $marca;
        $this->ano = $ano;
    }

   public function exibirInfo(): string
    {
        return "Carro: {$this->marca} {$this->modelo} - Ano: {$this->ano}";
    }
}

$meuCarro = new Carro("Toyota", "Corolla", 2021);
echo $meuCarro->exibirInfo();