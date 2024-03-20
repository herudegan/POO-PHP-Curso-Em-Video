<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aula 05 POO</title>
</head>
<body>
  <pre>
    <?php 
      require_once("classes.php");

      $p1 = new ContaBanco();
      $p2 = new ContaBanco();

      $p1 -> abrirConta("CC");
      $p1 -> setDono("Jubileu");
      $p1 -> setNumConta(1111);
      $p2 -> abrirConta("CP");
      $p2 -> setDono("Creuza");
      $p2 -> setNumConta(2222);

      $p1 -> depositar(300);
      $p2 -> depositar(500);


      $p2 -> sacar(650);

    ?>
  </pre>
</body>
</html>