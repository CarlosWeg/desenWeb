<?php
require_once 'classes/Usuario.php';
require_once 'classes/Session.php';

// Criando um usuário
$usuario = new Usuario();
$usuario->setUserName("Carlos");
$usuario->setUserLogin("carlos123");
$usuario->setUserPass("senha_secreta");

// Criando uma sessão
$sessao = new Session();
$sessao->setSessionId("sessao123");
$sessao->setUsuario($usuario);
$sessao->iniciaSessao();

// Exibindo informações da sessão
echo "ID da Sessão: " . $sessao->getSessionId() . "<br>";
echo "Status da Sessão: " . ($sessao->getStatus() ? "Ativa" : "Inativa") . "<br>";
echo "Usuário da Sessão: " . $sessao->getUsuarioSessao()->getUserName() . "<br>";
echo "Data/Hora de Início: " . $sessao->getDataHoraInicio()->format('Y-m-d H:i:s') . "<br>";
echo "Data/Hora do Último Acesso: " . $sessao->getDataHoraUltimoAcesso()->format('Y-m-d H:i:s') . "<br>";

// Finalizando a sessão
$sessao->finalizaSessao();
echo "Status da Sessão após finalizar: " . ($sessao->getStatus() ? "Ativa" : "Inativa") . "<br>";
?>
