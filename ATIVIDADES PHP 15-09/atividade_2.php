<?php

class Aluno 
{
    private string $nome;
    private float $media;

    public function __construct(string $nome, float $media)
    {
        $this->nome = $nome;
        $this->media = $media;
    }

    public function verificarAprovacao(): string 
    {
        if ($this->media >= 7.0) {
            return "O aluno {$this->nome} esta Aprovado com media {$this->media}.";
        }

        return "O aluno {$this->nome} está Reprovado com média {$this->media}.";
    }
}

$aluno1 = new Aluno("Carlos", 8.5);
$aluno2 = new Aluno("Mariana", 5.0);

echo $aluno1->verificarAprovacao() . PHP_EOL;
echo $aluno2->verificarAprovacao() . PHP_EOL;