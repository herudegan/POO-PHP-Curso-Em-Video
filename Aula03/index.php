<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aula 02 POO</title>
</head>
<body>
  <pre>
    <?php 
      require_once("classes.php");

      $c1 = new Caneta;
      $c1->modelo = "BIC Cristal";
      $c1->cor = "Preto";
      
      print_r($c1);
    ?>
  </pre>
</body>
</html>