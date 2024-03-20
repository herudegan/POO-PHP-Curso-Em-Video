<?php

// Definindo visibilidade

  class Caneta {
    public $modelo;
    private $cor;
    private $tampada;
    private $ponta;

    public function __construct($cor) {
      $this->cor = $cor;
      $this->tampar();
    }

    public function getModelo() {
      return $this->modelo;
    }
    public function setModelo($modelo) {
      $this->modelo = $modelo;
    }

    public function getPonta() {
      return $this->ponta;
    }

    public function setPonta($ponta) {
      $this->ponta = $ponta;
    }

    public function tampar() {
      $this->tampada = true;
    }

    public function destampar() {
      $this->tampada = false;
    }

    public function getCor() {
      return $this->cor;
    }
    public function setCor($cor) {
      $this->cor = $cor;
    }

    public function getTampada() {
      return $this->tampada;
    }
  }