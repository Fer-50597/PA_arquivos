<?php 

abstract class Automovel{
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

    private function andar(){

        $this->velocidade += 50;
        echo "{$this->nome} acelerou forte! {$this->velocidade} km/h<br>";   
    }
}

$carro1 = new Carro("Mustang Original", "Ford Mustang", "Vermelho", 1964);
$onibus1 = new Onibus("CityBus Eco", "Mercedes-Benz", "Verde", 2022);
$moto1 = new Moto("BMW G 310 GS", "BMW", "Branco", 2025);




?>