<?php

    // 5. Sistema de Loja Online
    // Implemente um sistema básico de gerenciamento de produtos em uma loja online.

    // Requisitos:

    // Crie uma classe Produto com as propriedades: nome, categoria, preco, quantidadeEmEstoque.

    // Adicione métodos para:

    // Adicionar ou remover unidades no estoque.
    // Aplicar um desconto ao preço.
    // Exibir as informações do produto.

    // Crie uma classe CarrinhoDeCompras:

    // Permita adicionar ou remover produtos.

    // Calcule o total do carrinho.


    class Produto{
        private $nome;
        private $categoria;
        private $preco;
        private $qntdEstoque;

        public function __construct($nome,$categoria,$preco,$qntdEstoque = 0){
            $this->nome = $nome;
            $this->categoria = $categoria;
            $this->preco = $preco;
            $this->qntdEstoque = $qntdEstoque;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getCategoria(){
            return $this->categoria;
        }

        public function setCategoria($categoria){
            $this->categoria = $categoria;
        }

        public function getPreco(){
            return $this->preco;
        }

        public function setPreco($preco){
            $this->preco = $preco;
        }

        public function getQntdEstoque(){
            return $this->qntdEstoque;
        }

        public function setQntdEstoque($qntdEstoque){
            $this->qntdEstoque = $qntdEstoque;
        }

        public function atualizarEstoque($operacao,$qntd){
            if ($operacao== 'adicionar'){
                $this ->$qntdEstoque+=$qntd;
            } else if ($operacao=='remover'){
                $this->qntdEstoque-=$qntd;
            }

        }

        public function aplicarDesconto($desconto){
            $this->preco  = $this->preco * (1-$desconto/100);
        }

        public function exibirInfo(){
            echo 'Produto : ' . $this->nome . '<br>';
            echo 'Categoria : ' . $this->categoria . '<br>';
            echo 'Preco : ' . $this->preco . '<br>';
            echo 'Quantidade em estoque : ' . $this->qntdEstoque . '<br>';
        }

    }


    class CarrinhoDeCompras{
        private $listaProdutos = [];


        public function adicionarProduto(Produto $produto, $qntd = 1){
            $nomeProduto = $produto->getNome();
            if (!array_key_exists($nomeProduto,$this->listaProdutos)){
                $this->listaProdutos[$nomeProduto] = [
                    'produto' => $produto,
                    'quantidade' => $qntd
                ];
            } else{
                $this->listaProdutos[$nomeProduto]['quantidade']+= $qntd;
            }
        }

        public function removerCarrinho(Produto $produto,$qntd = 0){
            $nomeProduto = $produto->getNome();
            if (array_key_exists($nomeProduto,$this->listaProdutos)){
                if ($this->listaProdutos[$nomeProduto]['quantidade']=$qntd){
                    unset($this->listaProdutos[$nomeProduto]);
                    return 'Item removido do carrinho: Quantidade a ser removida igual a quantidade no carrinho.';
                } else {
                    $this->listaProdutos[$nomeProduto]['quantidade']-=$qntd;
                    return 'Quantidade diminuida com sucesso.';
                }
            }
        }


        public function calcularTotal() {
            $total = 0;
            
            foreach ($this->listaProdutos as $nomeProduto => $item){
                $total += $item['quantidade'] * $item['produto']->getPreco();
            }
            
            return $total;
        }

        public function exibirCarrinho(){
            if (!empty($this->listaProdutos)){
                foreach ($this->listaProdutos as $nomeProduto => $item){
                    echo 'Nome do produto: ' . $nomeProduto . '<br>';
                    echo 'Quantidade no carrinho: ' . $item['quantidade'] . '<br>';
                    echo 'Preço unitário: ' . $item['produto']->getPreco() . '<br>';
                    echo '<br>';
                }
                echo ' Total carrinho: ' . $this->calcularTotal();
            }
        }

    }

    $produtoAborora = new Produto ('Abobora','Verduras',5.50,6);
    $produtoSalsicha = new Produto ('Salsicha','Congelados',2.00,8);
    

    $carrinhoCarlos = new CarrinhoDeCompras();
    $carrinhoCarlos->adicionarProduto($produtoAborora, 3);
    $carrinhoCarlos->adicionarProduto($produtoSalsicha,2);
    $carrinhoCarlos->exibirCarrinho();