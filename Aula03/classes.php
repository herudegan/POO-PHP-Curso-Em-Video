<?php

// Definindo visibilidade

  class Caneta {
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

    public function rabiscar() {
      if($this->tampada == true) {
        echo "Erro! Não posso rabiscar.";
      } else {
        echo "Estou rabiscando.";
      }
    }

    public function tampar() {
      $this->tampada = true;
    }

    public function destampar() {
      $this->tampada = false;
    }
  }