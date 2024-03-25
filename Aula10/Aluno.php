<?php 

  require_once 'Pessoa.php';
  class Aluno extends Pessoa {
    private $matricula;
    private $curso;

    public function __construct() {
      echo "<p>Um aluno foi criado</p>";
    }

    public function cancelarMatri() {
      echo "<p>Matrícula será cancelada</p>";
      $this -> setMatricula(false);
    }
    public function setMatricula($matricula) {
      $this -> matricula = $matricula;
    }
    public function getMatricula() {
      return $this -> matricula;
    }
    public function setCurso($curso) {
      $this -> curso = $curso;
    }
    public function getCurso() {
      return $this -> curso;
    }
  }