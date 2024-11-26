<?php

    // Exercício 9 - Sistema de Gerenciamento de Biblioteca
    // Crie um sistema simples para gerenciar uma biblioteca com as seguintes classes:

    // Livro:

    // Propriedades: título, autor, ano de publicação, gênero.
    // Métodos: um método para exibir os detalhes do livro.

    // Biblioteca:

    // Propriedades: nome, endereço, coleção de livros (um array de objetos Livro).
    // Métodos:
    // adicionarLivro(Livro $livro) para adicionar um livro à coleção.
    // exibirLivrosPorGenero($genero) para listar livros de um gênero específico.
    // removerLivro($titulo) para remover um livro pelo título.
    // Teste o sistema criando uma instância da biblioteca, adicionando livros e utilizando os métodos criados.

    class Livro{
        private $titulo;
        private $autor;
        private $anoPublicacao;
        private $genero;

        public function __construct($titulo,$autor,$anoPublicacao,$genero){
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->anoPublicacao = $anoPublicacao;
            $this->genero = $genero;
        }

        public function getTitulo(){
            return $this->titulo;
        }

        public function getAutor(){
            return $this->autor;
        }

        public function getAnoPublicacao(){
            return $this->anoPublicacao;
        }

        public function getGenero(){
            return $this->genero;
        }

        public function exibirDetalhesLivro(){
            echo 'Título : ' . $this->getTitulo() . '<br>';
            echo 'Autor : ' . $this->getAutor() . '<br>';
            echo 'Ano de Publicação : ' . $this->getAnoPublicacao() . '<br>';
            echo 'Gênero : ' . $this->getGenero() . '<br>';
        }
    }


    class Biblioteca{
        private $nome;
        private $endereco;
        private $colecaoLivros = [];

        public function __construct($nome,$endereco){
            $this->nome = $nome;
            $this->endereco = $endereco;
        }


        public function adicionarLivro(Livro $livro){
            $this->colecaoLivros[] = $livro;
        }

        public function exibirLivrosGenero($genero){
            foreach($this->colecaoLivros as $livro){
                if ($livro->getGenero() === $genero){
                    echo $livro->exibirDetalhesLivro();
                }
            }

        }

        public function removerLivro($titulo){
            foreach($this->colecaoLivros as $chave=>$livro){
                if ($livro->getTitulo() === $titulo){
                    unset($this->colecaoLivros[$chave]);
                    echo 'Livro ' . $livro->getTitulo() . ' removido com sucesso!<br>';
                }
            }
        }

    }


    $livroGeorge = new Livro('1984','George Orwell', 1950, 'Ficção');
    $bibliotecaRds = new Biblioteca('Biblioteca de Rio do Sul', 'Rio do Sul - SC');

    echo '<h1>Livros de ficção:</h1>';
    $bibliotecaRds->adicionarLivro($livroGeorge);
    $bibliotecaRds->exibirLivrosGenero('Ficção');

    echo '<h3>Teste remover livro:</h3>';
    $bibliotecaRds->removerLivro('1984');


