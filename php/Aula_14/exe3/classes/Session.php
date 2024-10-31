<?php
require_once 'Usuario.php';

class Session {
    private $sessionId;
    private $status;
    private $usuario;
    private $dataHoraInicio;
    private $dataHoraUltimoAcesso;

    public function getSessionId() {
        return $this->sessionId;
    }

    public function setSessionId($sessionId) {
        $this->sessionId = $sessionId;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function setUsuario(Usuario $usuario) {
        $this->usuario = $usuario;
    }

    public function getDataHoraInicio() {
        return $this->dataHoraInicio;
    }

    public function setDataHoraInicio($dataHoraInicio) {
        $this->dataHoraInicio = $dataHoraInicio;
    }

    public function getDataHoraUltimoAcesso() {
        return $this->dataHoraUltimoAcesso;
    }

    public function setDataHoraUltimoAcesso($dataHoraUltimoAcesso) {
        $this->dataHoraUltimoAcesso = $dataHoraUltimoAcesso;
    }

    public function iniciaSessao(): bool {
        $this->status = 1;
        $this->dataHoraInicio = new DateTime();
        $this->dataHoraUltimoAcesso = new DateTime();
        return true;
    }

    public function finalizaSessao(): bool {
        $this->status = 0;
        return true;
    }

    public function getUsuarioSessao(): Usuario {
        return $this->usuario;
    }
}
?>
