<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aula 02 POO</title>
</head>
<body>
    <?php 
      require_once("classes.php");

      $c1 = new Caneta;
      $c1->modelo = "BIC Cristal";
      $c1->cor = "Azul";
      $c1->ponta = 0.5;
      $c1->carga = 90;
      $c1->tampada = false;

      //$c1->tampar();
      
      //$c1->rabiscar();

      print_r($c1);
    ?>
</body>
</html>