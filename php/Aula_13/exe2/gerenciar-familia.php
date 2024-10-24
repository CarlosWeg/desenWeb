<?php
require_once 'modelo-pessoa.php';

class GerenciadorFamilia {
    private $membros = [];
    private $arquivoSaida = 'familia.txt';
    
    public function adicionarMembro(Pessoa $pessoa) {
        $this->membros[] = $pessoa;
    }
    
    public function salvarEmArquivo() {
        $conteudo = '';
        foreach ($this->membros as $membro) {
            // Formatação
            $conteudo .= "=== Membro da Família ===\n";
            $conteudo .= "Nome Completo: " . $membro->getNomeCompleto() . "\n";
            $conteudo .= "Data de Nascimento: " . $membro->getDataNascimento() . "\n";
            $conteudo .= "Idade: " . $membro->getIdade() . " anos\n";
            $conteudo .= "CPF/CNPJ: " . $membro->getCpfcnpj() . "\n";
            $conteudo .= "Telefone: " . $membro->getTelefone() . "\n";
            
            // Dados
            $endereco = $membro->getEndereco();
            $conteudo .= "\nEndereço:\n";
            $conteudo .= "Logradouro: " . $endereco->getLogradouro() . "\n";
            $conteudo .= "Bairro: " . $endereco->getBairro() . "\n";
            $conteudo .= "Cidade: " . $endereco->getCidade() . "\n";
            $conteudo .= "Estado: " . $endereco->getEstado() . "\n";
            $conteudo .= "CEP: " . $endereco->getCep() . "\n";
            
            // Dados
            $contato = $membro->getContato();
            $conteudo .= "\nContato:\n";
            $conteudo .= "Tipo: " . $contato->getTipo() . "\n";
            $conteudo .= "Nome: " . $contato->getNome() . "\n";
            $conteudo .= "Valor: " . $contato->getValor() . "\n";
            $conteudo .= "\n";
        }
        
        // Salvando
        file_put_contents($this->arquivoSaida, $conteudo);
    }
}

// Pai
$pai = new Pessoa();
$pai->setNome("Carlos");
$pai->setSobrenome("Silva");
$pai->setDataNascimento("1970-05-15");
$pai->setCpfcnpj("123.456.789-00");
$pai->setTelefone("(11) 98765-4321");

$enderecoPai = new Endereco();
$enderecoPai->setLogradouro("Rua das Flores, 123");
$enderecoPai->setBairro("Jardim Primavera");
$enderecoPai->setCidade("São Paulo");
$enderecoPai->setEstado("SP");
$enderecoPai->setCep("01234-567");
$pai->setEndereco($enderecoPai);

$contatoPai = new Contato();
$contatoPai->setTipo(1);
$contatoPai->setNome("Email");
$contatoPai->setValor("carlos@email.com");
$pai->setContato($contatoPai);

// Mãe
$mae = new Pessoa();
$mae->setNome("Maria");
$mae->setSobrenome("Silva");
$mae->setDataNascimento("1975-03-20");
$mae->setCpfcnpj("987.654.321-00");
$mae->setTelefone("(11) 98765-1234");

$enderecoMae = new Endereco();
$enderecoMae->setLogradouro("Rua das Flores, 123");
$enderecoMae->setBairro("Jardim Primavera");
$enderecoMae->setCidade("São Paulo");
$enderecoMae->setEstado("SP");
$enderecoMae->setCep("01234-567");
$mae->setEndereco($enderecoMae);

$contatoMae = new Contato();
$contatoMae->setTipo(1);
$contatoMae->setNome("Email");
$contatoMae->setValor("maria@email.com");
$mae->setContato($contatoMae);

// Irmão
$irmao = new Pessoa();
$irmao->setNome("Pedro");
$irmao->setSobrenome("Silva");
$irmao->setDataNascimento("2000-10-10");
$irmao->setCpfcnpj("111.222.333-44");
$irmao->setTelefone("(11) 98888-7777");

$enderecoIrmao = new Endereco();
$enderecoIrmao->setLogradouro("Rua das Flores, 123");
$enderecoIrmao->setBairro("Jardim Primavera");
$enderecoIrmao->setCidade("São Paulo");
$enderecoIrmao->setEstado("SP");
$enderecoIrmao->setCep("01234-567");
$irmao->setEndereco($enderecoIrmao);

$contatoIrmao = new Contato();
$contatoIrmao->setTipo(1);
$contatoIrmao->setNome("Email");
$contatoIrmao->setValor("pedro@email.com");
$irmao->setContato($contatoIrmao);

// Criando o gerenciador e adicionando os membros
$gerenciador = new GerenciadorFamilia();
$gerenciador->adicionarMembro($pai);
$gerenciador->adicionarMembro($mae);
$gerenciador->adicionarMembro($irmao);

// Salvando no arquivo
$gerenciador->salvarEmArquivo();

echo "Dados da família foram salvos com sucesso em 'familia.txt'!";
?>