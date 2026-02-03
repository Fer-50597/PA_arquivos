<?php

class Automovel{
    public $nome;
    public $marca;
    public $cor;
    public $ano;
    public $preco;


    function __construct(string $nome, string $marca, string $cor, int $ano, float $preco)
    {
        $this->nome = $nome;
        $this->marca = $marca;
        $this->cor = $cor;
        $this->ano = $ano;
        $this->preco = $preco;
    }

    function andar()
    {
        echo "{$this->nome} está andando/n";
    }

}

$carro = new Automovel("Mustang Oiginal", "Ford Mustang", "Vermelho", 1964, 375000);

$carro->andar();

$moto = new Automovel("BMW G 310 GS", "BMW", "Branco", 2025, 22000);

$moto->andar();

$onibus = new Automovel("CityBus Eco", "Mercedes-Benz", "Verde", 2022, 1250000);

$onibus->andar();


class Animal{
    public $nome;
    public $especie;
    public $nome_cientifico;
    public $anos_vida;
    public $pelagem;


    function __construct(string $nome, string $especie, string $nome_cientifico, string $anos_vida, string $pelagem)
    {
        $this->nome = $nome;
        $this->especie = $especie;
        $this->nome_cientifico = $nome_cientifico;
        $this->anos_vida = $anos_vida;
        $this->pelagem = $pelagem;
    }

    function locomover()
    {
        echo "{$this->nome} está locomovendo/n";
    }

}

$cachorro = new Animal("Cachorro", "Mamífero", "Canis lupus familiaris", "10 anos", "Pelagem varíavel");

$cachorro->locomover();

$hiena = new Animal("Hiena", "Mamífero", "Crocuta crocuta", "12 anos", "Pelagem áspera, geralmente curta, malhada, riscada ou castanha uniforme");

$hiena->locomover();

$taturana = new Animal("Taturana", "Larva de mariposa", "Lonomia obliqua", "Semanas", "Corpo recoberto por cerdas/espinhos urticantes; aspecto felpudo e colorido");

$taturana->locomover();


class Filme{
    public $nome;
    public $duracao;
    public $ano_lancamento;
    public $diretor;

    function __construct(string $nome, string $duracao, int $ano_lancamento, string $diretor)
    {
        $this->nome = $nome;
        $this->duracao = $duracao;
        $this->ano_lancamento = $ano_lancamento;
        $this->diretor = $diretor;
    }

    function cinema()
    {
        echo "{$this->nome} está passando nos cinemas/n";
    }

}

$filme1 = new Filme("O Iluminado (The Shining)", "2h26min", 1980, "Stanley Kubrick");

$filme1->cinema();

$filme2 = new Filme("Sexta-feira 13 (Friday the 13th)", "1h35min", 1980, "Sean S. Cunningham");

$filme2->cinema();

$filme3 = new Filme("A Hora do Pesadelo (A Nightmare on Elm Street)", "1h34min", 1984, "Wes Craven");

$filme3->cinema();

?> 