<?php

// Exercício 2: Sistema de Produtos
// Objetivo: Criar um sistema básico de gerenciamento de produtos.
// Requisitos:

// Crie uma classe Produto com:

// código
// nome
// preço
// quantidade em estoque

// Implemente métodos para:

// adicionar estoque
// remover estoque
// atualizar preço
// exibir informações do produto

// Não permita:

// preços negativos
// estoque negativo
// nome vazio


    class Produto{
        private $codigo;
        private $nome;
        private $preco;
        private $qntdEstoque;

        public function __construct($codigo, $nome, $preco, $qntdEstoque){
            if(empty($codigo) || empty($nome)){
                throw new InvalidArgumentException('Código e Nome devem ser preenchidos!');
            }
            if ($preco<0 || $qntdEstoque<0){
                throw new InvalidArgumentException('O preço e estoque não podem ser negativos');
            }

            $this->codigo = $codigo;
            $this->nome = $nome;
            $this->preco = $preco;
            $this->qntdEstoque = $qntdEstoque;
        }


        public function adicionarEstoque($qntd){
            if ($qntd<=0){
                throw new InvalidArgumentException('A quantidade a ser adicionada deve ser maior que zero');
            }

            $this->qntdEstoque+=$qntd;
        }

        public function removerEstoque($qntd){
            if ($qntd>$this->qntdEstoque){
                throw new InvalidArgumentException('A quantidade a ser removida é maior que a quantidade atual do estoque');
            }

            $this->qntdEstoque-= $qntd;
        }

        public function atualizarPreco($precoNovo){
            if ($precoNovo<0){
                throw new InvalidArgumentException('O preco novo não pode ser negativo');
            }

            $this->preco = $precoNovo;
        }

        public function getInfo(){
            return [
                'codigo' => $this->codigo,
                'nome' => $this->nome,
                'preco' => $this->preco,
                'qntdEstoque' => $this->qntdEstoque
            ];
        }
    }

try{
    $produto = new Produto(123,'Geleia',2.50,10);
    $produto->adicionarEstoque(5);
    $produto->removerEstoque(2);
    $produto->atualizarPreco(4.00);
    print_r($produto->getInfo());

} catch(Exception $e){
    echo 'Erro: ' . $e->getMessage();
}