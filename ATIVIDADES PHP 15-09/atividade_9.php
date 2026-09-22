<?php

class Livro
{
    private string $titulo;
    private string $autor;
    private int $ano;

    public function __construct(string $titulo, string $autor, int $ano)
    {
        $this->titulo = $titulo;
        $this->autor  = $autor;
        $this->ano    = $ano;
    }

    public function getAno(): int
    {
        return $this->ano;
    }

    public function getDetalhes(): string
    {
        return "Título: '{$this->titulo}' | Autor: {$this->autor} | Ano: {$this->ano}";
    }
}


$catalogo = [
    new Livro("Clean Code", "Robert C. Martin", 2008),
    new Livro("Entendendo Algoritmos", "Aditya Bhargava", 2017),
    new Livro("O Programador Pragmático", "Andrew Hunt", 1999),
    new Livro("Refatoração (2ª Edição)", "Martin Fowler", 2018),
    new Livro("Arquitetura Limpa", "Robert C. Martin", 2017),
    new Livro("Padrões de Projetos", "Erich Gamma et al.", 1994),
];

echo "--- LIVROS PUBLICADOS APÓS 2015 ---" . PHP_EOL;

foreach ($catalogo as $livro) {
    if ($livro->getAno() > 2015) {
        echo $livro->getDetalhes() . PHP_EOL;
    }
}