<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aula 10 POO</title>
</head>
<body>
  <?php 
    require_once 'Pessoa.php';
    require_once 'Aluno.php';
    require_once 'Professor.php';
    require_once 'Funcionario.php';

    $p1 = new Pessoa();
    $p2 = new Aluno();
    $p3 = new Professor();
    $p4 = new Funcionario();

    $p1 -> setNome("Pedro");
    $p2 -> setNome("Maria");
    $p3 -> setNome("Cl�udio");
    $p4 -> setNome("Fabiana");

    $p2 -> setCurso("Inform�tica");
    $p3 -> setSalario(2500.75);
    $p4 -> setSetor("Estoque");

  ?>
</body>
</html>