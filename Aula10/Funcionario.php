<?php 

  require_once 'Pessoa.php';

  class Funcionario extends Pessoa {
    private $setor;
    private $trabalhando;

    public function __construct() {
      echo "<p>Um funcionário foi criado</p>";
    }

    public function mudarSetor($s) {
      $this -> setSetor($s);
    }

    public function setSetor($setor) {
      $this -> setor = $setor;
    }
    public function getSetor() {
      return $this -> setor;
    }
    public function setTrabalhando() {
      $this -> trabalhando = ! $this -> trabalhando;
    }
    public function getTrabalhando() {
      return $this -> trabalhando;
    }
  }