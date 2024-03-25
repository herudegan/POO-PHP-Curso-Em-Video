<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="ISO-8859-1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Aula 09 POO</title>
</head>
<body>
  <?php 
    require_once 'pessoa.php';
    require_once 'livro.php';

    $p1 = new Pessoa('Laura', '17', 'F');
    $p2 = new Pessoa('Lucas', '17', 'M');

    $l1 = new Livro('Mariana', 'Pedro Bandeira', 300, 65, false, $p1);
    $l2 = new Livro('Shadow Slave', 'S/A', 1300, 1100, true, $p2);

    $l1 -> detalhes();
    echo "<br>";
    $l2 -> detalhes();
  ?>
</body>
</html>