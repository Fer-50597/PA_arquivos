<?php

//Classe Produto
class Produto{
    private $nome;
    public $preco;
    private $quant_estoque;
    private $estado_pedido;

    function __construct(string $nome, float $preco, int $quant_estoque, string $estado_pedido) 
    {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quant_estoque = $quant_estoque;
        $this->estado_pedido = $estado_pedido;
    }

    public function info(): void
    {
        echo "Nome do produto: {$this->nome}<br>";
        echo "Preço do produto: {$this->preco}<br>";
        echo "Quantidade em estoque: {$this->quant_estoque}<br>";
        echo "Estado do pedido: {$this->estado_pedido}<br>";
    }    
}

//Classe Cliente
   abstract class Cliente{
    protected string $nome;
    protected int $cpf;
    protected string $senha;
    protected int $quantidade = 0;


    public function __construct(string $nome, int $cpf, string $senha, int $quantidade)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->senha = $senha;
        $this->quantidade =$quantidade;
    }

//---------------------------------------------------------------
    abstract public function tipo_cliente(): string;

//---------------------------------------------------------------
    public function compra(): void
    {
        echo "{$this->nome} realizou uma compra<br>";
    }

//---------------------------------------------------------------
    public function info(): void
    {
        echo "Nome do cliente: {$this->nome}<br>";
        echo "CPF do cliente: {$this->cpf}<br>";
    }

   }

//Tipos de cliente ---------------------------------------------------------------
   class ClienteComum extends Cliente{

    public function tipo_cliente(): string{
        return "Cliente Comum";
    }

   }

   class ClientePremium extends Cliente{

    public function tipo_cliente(): string{
        return "Cliente Premium";
    }

    public function aplicarDesconto(): void {


   }
}
//---------------------------------------------------------------
    $produtoA = new Produto("Produto A", 2.99, 45, "Aberto");
    $produtoB = new Produto("Produto B", 100.00, 50, "Enviado");

    $clienteA = new ClienteComum("ClienteA", 110011100111, "12345", 10);
    $clienteB = new ClientePremium("ClienteB", 100011100111, "12345", 10);

    $clienteA->tipo_cliente();
    $clienteA->compra();
    $clienteA->info();
    $produtoA->info();
    echo "<br>";
    $clienteB->tipo_cliente();
    $clienteB->compra();
    $clienteB->info();
    $produtoB->info();
?>