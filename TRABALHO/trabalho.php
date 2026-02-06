<?php

//Classe Produto
abstract class Produto{
    public $nome;
    public $preco;
    private $estado_pedido;

    function __construct(string $nome, float $preco, string $estado_pedido) 
    {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->estado_pedido = $estado_pedido;
    }

    public function info(): void
    {
        echo "--Informações sobre o produto--<br>";
        echo "Nome do produto: {$this->nome}<br>";
        echo "Preço do produto: {$this->preco}<br>";
        echo "Estado do pedido: {$this->estado_pedido}<br>";
    }    
}

//Classe Cliente
   abstract class Cliente{
    protected string $nome;
    protected int $cpf;
    protected string $senha;
    public int $quantidade = 0;


    public function __construct(string $nome, int $cpf, string $senha, int $quantidade)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->senha = $senha;
        $this->quantidade = $quantidade;
    }

//---------------------------------------------------------------
    abstract public function tipo_cliente(): void;    
    
//---------------------------------------------------------------
    abstract public function calcularValorTotal($quantidade, $preco): float;

//---------------------------------------------------------------
    abstract public function aplicarDesconto($valorTotal, $porcetagem): float;

//---------------------------------------------------------------
    abstract public function valor_Desconto($valorTotal, $valorCDesconto): float;

//---------------------------------------------------------------
    public function compra(): void
    {
        echo "{$this->nome} realizou uma compra<br>";
        echo "Quantidade comprada: {$this->quantidade}<br>";
    }

//---------------------------------------------------------------
    public function info(): void
    {
        echo "--Informações do cliente--<br>";
        echo "Nome do cliente: {$this->nome}<br>";
        echo "CPF do cliente: {$this->cpf}<br>";
    }
}

//Tipos de cliente ---------------------------------------------------------------

   class ClienteComum extends Cliente{
    
    public function tipo_cliente(): void{
        echo "---Cliente Comum---<br> ";
        echo "---Desconto: 0%---<br>";
    }
    
    public function calcularValorTotal($preco, $quantidade): float {
        $valorTotal = $preco * $quantidade;
        return $valorTotal;
    }

    public function aplicarDesconto($valorTotal, $desconto): float {
        $valorCDesconto = $valorTotal * 0.00;
        return $valorCDesconto;
    }

    public function valor_Desconto($valorTotal, $valorCDesconto): float {
        $valor_Desconto = $valorTotal - $valorCDesconto;
        return $valor_Desconto;
    }

   }

   class ClientePremium extends Cliente{

    public function tipo_cliente(): void{
        echo "---Cliente Premium---<br>";
        echo "---Desconto: 15%---<br>";
    }

    public function calcularValorTotal($preco, $quantidade): float {
        $valorTotal = $preco * $quantidade;
        return $valorTotal;
    }

    public function aplicarDesconto($valorTotal, $desconto): float {
        $valorCDesconto = $valorTotal * 0.15;
        return $valorCDesconto;
    }

    public function valor_Desconto($valorTotal, $valorCDesconto): float {
        $valor_Desconto = $valorTotal - $valorCDesconto;
        return $valor_Desconto;

   }
}


//---------------------------------------------------------------
    $produtoA = new Produto("Produto A", 2.99, 45, "Aberto");
    $produtoB = new Produto("Produto B", 100.00, 50, "Enviado");
    $produtoC = new Produto("Produto C", 49.99, 45, "Pago");
    $produtoD = new Produto("Produto D", 15.99, 45, "Cancelado");

    $clienteA = new ClienteComum("ClienteA", 110011100111, "12345", 10);
    $clienteB = new ClientePremium("ClienteB", 100011100111, "12345", 10);
    $clienteC = new ClienteComum("ClienteC", 110010100111, "12345", 1);
    $clienteD = new ClientePremium("ClienteD", 110011100101, "12345", 5);


    $clienteA->tipo_cliente();
    $clienteA->compra();
    $clienteA->calcularValorTotal($preco, $quantidade);
    $clienteA->info();
    $produtoA->info();

    echo "<br>";

    $clienteB->tipo_cliente();
    $clienteB->compra();
    $clienteB->calcularValorTotal($preco, $quantidade);
    $clienteB->info();
    $produtoB->info();
    
    echo "<br>";

    $clienteC->tipo_cliente();
    $clienteC->compra();
    $clienteC->calcularValorTotal($preco, $quantidade);
    $clienteC->info();
    $produtoC->info();

    echo "<br>";

    $clienteD->tipo_cliente();
    $clienteD->compra();
    $clienteD->calcularValorTotal($preco, $quantidade);
    $clienteD->info();
    $produtoD->info();

?>