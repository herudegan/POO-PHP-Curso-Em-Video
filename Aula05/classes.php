<?php

// Definindo visibilidade
// Esse github copilot tá sabendo mt

class ContaBanco {
  // Atributos da classe
  public $numConta;
  protected $tipo;
  private $dono;
  private $saldo;
  private $status;

  // Métodos da classe
  public function abrirConta($t) {
    $this->setTipo($t);
    $this->setStatus(true);
    if ($t == "CC") {
      $this->setSaldo(50);
    } elseif ($t == "CP") {
      $this->setSaldo(150);
    }
  }
  public function fecharConta() {
    if ($this->getSaldo() > 0) {
      echo "<p>Conta com dinheiro. Não posso fechá-la!</p>";
    } elseif ($this->getSaldo() < 0) {
      echo "<p>Conta em débito. Não posso fechá-la!</p>";
    } else {
      $this->setStatus(false);
      echo "<p>Conta de " . $this->getDono() . " fechada com sucesso!</p>";
    }
  }

  public function depositar($v) {
    if ($this->getStatus()) {
      $this->setSaldo($this->getSaldo() + $v);
      echo "<p>Depósito de R\$ $v na conta de " . $this->getDono() . "</p>";
    } else {
      echo "<p>Conta fechada. Não consigo depositar!</p>";
    }
  }

  public function sacar($v) {
    if ($this->getStatus()) {
      if ($this->getSaldo() >= $v) {
        $this->setSaldo($this->getSaldo() - $v);
        echo "<p>Saque de R\$ $v autorizado na conta de " . $this->getDono() . "</p>";
      } else {
        echo "<p>Saldo insuficiente para saque!</p>";
      }
    } else {
      echo "<p>Não posso sacar de uma conta fechada!</p>";
    }
  }

  public function pagarMensal() {
    if ($this->getTipo() == "CC") {
      $v = 12;
    } elseif ($this->getTipo() == "CP") {
      $v = 20;
    }
    if ($this->getStatus()) {
      $this->setSaldo($this->getSaldo() - $v);
      echo "<p>Mensalidade de R$ $v debitada na conta de " . $this->getDono() . "</p>";
    } else {
      echo "<p>Problemas com a conta. Não posso cobrar!</p>";
    }
  }

  public function getNumConta() {
    return $this->numConta;
  }
  public function setNumConta($n) {
    $this->numConta = $n;
  }

  public function getTipo() {
    return $this->tipo;
  }
  public function setTipo($t) {
    $this->tipo = $t;
  }

  public function getDono() {
    return $this->dono;
  }
  public function setDono($d) {
    $this->dono = $d;
  }

  public function getSaldo() {
    return $this->saldo;
  }
  public function setSaldo($s) {
    $this->saldo = $s;
  }

  public function getStatus() {
    return $this->status;
  }
  public function setStatus($st) {
    $this->status = $st;
  }
}