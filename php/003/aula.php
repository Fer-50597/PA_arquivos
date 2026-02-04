<?php 

abstract class Automovel{
    private string $roda;
    protected string $nome;
    protected string $marca;
    protected string $cor;
    protected int $ano;
    protected int $velocidade;

    public function __construct(string $nome, string $marca, string $cor, int $ano) {
        $this->nome = $nome;
        $this->marca = $marca;
        $this->cor = $cor;
        $this->ano = $ano;
    }

    abstract public function tipo(): string;

    public function andar(): void {
        $this->velocidade += 20;
        echo "{$this->nome} está andando a {$this->velocidade} km/h<br>";
    }

    public function info(): void {
        echo "Nome: {$this->nome}<br>";
        echo "Marca: {$this->marca}<br>";
        echo "Cor: {$this->cor}<br>";
        echo "Ano: {$this->ano}<br>"; 
    }

}

class Carro extends Automovel {

    public function tipo(): string {
        return "Carro";
    }
}

class Onibus extends Automovel {

    public function tipo(): string{
        return "Onibus";
    }
}

class Moto extends Automovel {

    public function tipo(): string{
        return "Moto";
    }
}

$carro1 = new Carro("Mustang Original", "Ford Mustang", "Vermelho", 1964);
$onibus1 = new Onibus("CityBus Eco", "Mercedes-Benz", "Verde", 2022);
$moto1 = new Moto("BMW G 310 GS", "BMW", "Branco", 2025);

$carro1->info();
$carro1->andar();

echo "<hr>";

$onibus1->info();
$onibus1->andar();

echo "<hr>";

$moto1->info();
$moto1->andar();

echo "<hr>";


abstract class Animal{
    protected string $nome;
    protected string $especie;
    protected string $nome_cientifico;
    protected string $anos_vida;

    public function __construct(string $nome, string $especie, string $nome_cientifico, string $anos_vida) {
        $this->nome = $nome;
        $this->especie = $especie;
        $this->nome_cientifico = $nome_cientifico;
        $this->anos_vida = $anos_vida;
    }

    abstract public function tipo(): string;

    public function andar(): void {
        echo "{$this->nome} está andando<br>";
    }

    public function info(): void {
        echo "Nome: {$this->nome}<br>";
        echo "Especie: {$this->especie}<br>";
        echo "Nome Científico: {$this->nome_cientifico}<br>";
        echo "Anos de vida: {$this->anos_vida}<br>"; 
    }

}

class Cachorro extends Animal {

    public function tipo(): string {
        return "Cachorro";
    }
}

class Hiena extends Animal {

    public function tipo(): string{
        return "Hiena";
    }
}

class Taturana extends Animal {

    public function tipo(): string{
        return "Taturana";
    }
}

$animal1 = new Cachorro("cachorro", "Mamífero", "Canis lupus familiaris", "10 anos");
$animal2 = new Hiena("Hiena", "Mamífero", "Crocuta crocuta", "12 anos");
$animal3 = new Taturana("Taturana", "Larva de mariposa", "Lonomia obliqua", "Semanas");

$animal1->info();
$animal1->andar();

echo "<hr>";

$animal2->info();
$animal2->andar();

echo "<hr>";

$animal3->info();
$animal3->andar();

echo "<hr>";


abstract class Filme{
    protected string $nome;
    protected string $duracao;
    protected int $ano_lancamento;
    protected string $diretor;

    public function __construct(string $nome, string $duracao, int $ano_lancamento, string $diretor) {
        $this->nome = $nome;
        $this->duracao = $duracao;
        $this->ano_lancamento = $ano_lancamento;
        $this->diretor = $diretor;
    }

    abstract public function tipo(): string;

    public function exibicao(): void {
        echo "{$this->nome} está sendo exibido nos cinemas<br>";
    }

    public function info(): void {
        echo "Nome: {$this->nome}<br>";
        echo "Duração: {$this->duracao}<br>";
        echo "Ano de lançamento: {$this->ano_lancamento}<br>";
        echo "Diretor: {$this->diretor}<br>"; 
    }

}

class Terror extends Filme {

    public function tipo(): string {
        return "Filme de terror";
    }
}

$filme1 = new Terror("O Iluminado (The Shining)", "2h26min", 1980, "Stanley Kubrick");
$filme2 = new Terror("Sexta-feira 13 (Friday the 13th)", "1h35min", 1980, "Sean S. Cunningham");
$filme3 = new Terror("A Hora do Pesadelo (A Nightmare on Elm Street)", "1h34min", 1984, "Wes Craven");

$filme1->info();
$filme1->exibicao();

echo "<hr>";

$filme2->info();
$filme2->exibicao();

echo "<hr>";

$filme3->info();
$filme3->exibicao();;

echo "<hr>";

?>