<?php

// Exercício 4: Sistema de Notificações
// Objetivo: Criar um sistema de notificações com diferentes canais.
// Requisitos:

// Crie uma interface NotificacaoInterface:

// método enviar()

// Implemente classes para diferentes tipos de notificação:

// Email
// SMS
// Push

// Crie uma classe GerenciadorNotificacoes que:

// permite registrar múltiplos canais
// envia a mesma mensagem por todos os canais

// Use composição para gerenciar os canais

interface NotificacaoInterface{
    public function enviar($destinatario,$mensagem);
}

class EmailNotificacao implements NotificacaoInterface{
    public function enviar($destinatario,$mensagem){
        return 'E-mail enviado para: ' . $destinatario. ' : ' . $mensagem;
    }
}

class SMSNotificacao implements NotificacaoInterface{
    public function enviar($destinatario,$mensagem){
        return 'SMS enviado para: ' . $destinatario . ' : ' . $mensagem;
    }
}

class PushNotificacao implements NotificacaoInterface{
    public function enviar($destinatario,$mensagem){
        return 'Push enviado para: ' . $destinatario . ' : '. $mensagem;
    }
}

class gerenciadorNotificacoes{
    private $canais = [];

    public function adicionarCanal(NotificacaoInterface $canal){
        $this->canais[] = $canal;
    }

    public function notificar($destinatario,$mensagem){
        $resultados = [];

        foreach($this->canais as $canal){
            $resultados[] = $canal->enviar($destinatario,$mensagem);
        }
        return $resultados;
    }
}


$gerenciador = new gerenciadorNotificacoes();
$gerenciador->adicionarCanal(new EmailNotificacao());
$gerenciador->adicionarCanal(new SMSNotificacao());
$gerenciador->adicionarCanal(new PushNotificacao());

$resultados = $gerenciador->notificar('João','você foi sorteado!');

print_r($resultados);