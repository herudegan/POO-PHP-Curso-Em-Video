<?php 

class Luta {
  private $desafiante;
  private $desafiado;
  private $rounds;
  private $aprovada;

  public function getDesafiante() {
    return $this->desafiante;
  }
  public function setDesafiante($desafiante) {
    $this->desafiante = $desafiante;
  }
  public function getDesafiado() {
    return $this->desafiado;
  }
  public function setDesafiado($desafiado) {
    $this->desafiado = $desafiado;
  }

  public function marcarLuta($l1, $l2) {
    if($l1->getCategoria() === $l2->getCategoria() && $l1 !== $l2) {
      $this -> aprovada = true;
      $this -> desafiado = $l1;
      $this -> desafiante = $l2;

    } else {
      $this -> aprovada = false;
      $this -> desafiado = null;
      $this -> desafiante = null;
    }
  }

  public function Lutar() {
    if($this -> aprovada) {
      $this -> desafiado -> apresentar();
      $this -> desafiante -> apresentar();
      $vencedor = mt_rand(0, 2);
      switch ($vencedor) {
        case 0:
          echo "<p>Empatou!</p>";
          $this -> desafiado -> empatarLuta();
          $this -> desafiante -> empatarLuta();
          break;
        
        case 1:
          echo "<p>" . $this -> desafiado -> getNome() . " venceu!</p>";
          $this -> desafiado -> ganharLuta();
          $this -> desafiante -> perderLuta();
          break;
        
        case 2:
          echo "<p>" . $this -> desafiante -> getNome() . " venceu!</p>";
          $this -> desafiante -> ganharLuta();
          $this -> desafiado -> perderLuta();
          break;

      }
    } else {
      echo "<p>A luta n�o pode acontecer! Ou os lutadores n�o s�o da mesma categoria ou s�o a mesma pessoa!</p>";
    }
  }

}

?>