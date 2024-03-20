<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aula 04 POO</title>
</head>
<body>
  <pre>
    <?php 
      require_once("classes.php");

      $c1 = new Caneta("Azul");
      $c1->setModelo("BIC");
      $c1->setPonta(0.5);
      
      print_r($c1);
    ?>
  </pre>
</body>
</html>