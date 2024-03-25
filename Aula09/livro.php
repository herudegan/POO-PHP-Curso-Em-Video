<?php 
  require_once 'publicacao.php';
  class Livro implements Publicacao {
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    public function __construct($t, $a, $tot, $p, $ab, $l) {
      $this -> setTitulo($t);
      $this -> setAutor($a);
      $this -> setTotPaginas($tot);
      $this -> setPagAtual($p);
      $this -> setAberto($ab);
      $this -> setLeitor($l);
    }

    public function getTitulo() {
      return $this -> titulo;
    }
    public function setTitulo($titulo) {
      $this -> titulo = $titulo;
    }
    public function getAutor() {
      return $this -> autor;
    }
    public function setAutor($autor) {
      $this -> autor = $autor;
    }
    public function getTotPaginas() {
      return $this -> totPaginas;
    }
    public function setTotPaginas($totPaginas) {
      $this -> totPaginas = $totPaginas;
    }
    public function getPagAtual() {
      return $this -> pagAtual;
    }
    public function setPagAtual($pagAtual) {
      $this -> pagAtual = $pagAtual;
    }
    public function getAberto() {
      return $this -> aberto;
    }
    public function setAberto($aberto) {
      $this -> aberto = $aberto;
    }
    public function getLeitor() {
      return $this -> leitor;
    }
    public function setLeitor($leitor) {
      $this -> leitor = $leitor;
    }

    public function detalhes() {
      echo "<p>Livro: " . $this -> titulo . " o qual foi escrito por: " . $this -> autor . "</p>";
      echo "<p>Com um total de páginas de :" . $this -> totPaginas . " e está: " . ($this -> aberto ? 'aberto' : 'fechado') . "</p>";
      echo "<p>Atualmente está sendo lido por: " . $this -> leitor -> getNome() . "</p>";
    }

    public function abrir() {
      $this -> setAberto(true);
    }

    public function fechar() {
      $this -> setAberto(false);
    }

    public function folhear($p) {
      if ($p <= $this -> getTotPaginas() && $this -> getAberto()) {
        $this -> setPagAtual($p);
      } else {
        echo "<p>Erro ao folhear</p>";
      }
    }

    public function avancarPag() {
      $this -> setPagAtual($this -> getPagAtual() + 1);
    }

    public function voltarPag() {
      $this -> setPagAtual($this -> getPagAtual() - 1);
    }
}
?>