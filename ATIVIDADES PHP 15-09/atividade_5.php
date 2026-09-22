<?php

class Contato
{
    private string $nome;
    private string $telefone;
    private string $email;

    public function __construct(string $nome, string $telefone, string $email)
    {
        $this->nome     = $nome;
        $this->telefone = $telefone;
        $this->email    = $email;
    }

    public function exibirDetalhes(): string
    {
        return "Nome: {$this->nome} | Tel: {$this->telefone} | E-mail: {$this->email}";
    }
}


$agenda = [
    new Contato("Carlos Silva", "(49) 99123-4567", "carlos@email.com"),
    new Contato("Ana Souza", "(49) 98876-5432", "ana.souza@email.com"),
    new Contato("Mariana Lima", "(49) 99988-1122", "mariana@email.com"),
];


echo "--- LISTA DE CONTATOS ---" . PHP_EOL;
foreach ($agenda as $indice => $contato) {
    echo ($indice + 1) . ". " . $contato->exibirDetalhes() . PHP_EOL;
}