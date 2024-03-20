<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="ISO-8859-1"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aula 06 POO</title>
</head>
<body>
  <pre>
    <?php 
      require_once 'controleRemoto.php';
      $c = new controleRemoto();
      $c->ligar();
      $c->maisVolume();
      $c->maisVolume();
      $c->abrirMenu();
      $c->fecharMenu();
      $c->ligarMudo();
      $c->abrirMenu();
      $c->desligarMudo();
      $c->fecharMenu();
      $c->play();
      $c->abrirMenu();
    ?>
  </pre>
</body>
</html>