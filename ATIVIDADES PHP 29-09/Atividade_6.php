<?php

class Config {
    protected array $parametros = [];

    public function __construct(array $parametrosIniciais = []) {
        $this->parametros = $parametrosIniciais;
    }
}

class SubConfig extends Config {
    public function getParametro(string $chave) {
        return $this->parametros[$chave] ?? null;
    }

    public function setParametro(string $chave, $valor): void {
        $this->parametros[$chave] = $valor;
    }
}

// Testando a classe
$config = new SubConfig(["host" => "localhost", "porta" => 3306]);

echo "Host inicial: " . $config->getParametro("host") . "\n";

// Modificando e adicionando parâmetros através da subclasse
$config->setParametro("host", "127.0.0.1");
$config->setParametro("banco", "sistema_db");

echo "Host alterado: " . $config->getParametro("host") . "\n";
echo "Novo parâmetro (banco): " . $config->getParametro("banco") . "\n";