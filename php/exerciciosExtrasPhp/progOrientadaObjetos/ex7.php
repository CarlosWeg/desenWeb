<?php

// Exercício 7. Praticando Tudo Junto
//Loja Online

// Crie as seguintes classes:

// Produto:
// Atributos: $nome, $preco
// Métodos:
// __construct($nome, $preco).
// getDetalhes()

// Carrinho:
// Atributos: $produtos
// Métodos:
// adicionarProduto(Produto $produto) adiciona um produto ao carrinho.
// getResumo() exibe todos os produtos no carrinho.

// Crie alguns produtos, adicione-os ao carrinho e exiba o resumo.


class Produto{
    private $nome;
    private $preco;

    public function __construct($nome,$preco){
        $this->nome=$nome;
        $this->preco=$preco;
    }

    public function getDetalhes(){
        return 'Produto: Nome ' . $this->nome . ' Preço R$.:' . $this->preco;
    }

}

class Carrinho{
    private $produtos = [];

    public function adicionarProduto(Produto $produto){
        $this->produtos[] = $produto;
    }

    public function getResumo(){
        $aData = [];
        foreach($this->produtos as $produto){
            $aData[]= $produto->getDetalhes();
        }

        return $aData;
    }
}


$produto1 = new Produto("Notebook", 3000);
$produto2 = new Produto("Mouse", 50);

$carrinho = new Carrinho();
$carrinho->adicionarProduto($produto1);
$carrinho->adicionarProduto($produto2);

$resumoCarrinho = $carrinho->getResumo();
print_r($resumoCarrinho);