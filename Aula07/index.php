<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aula 07 POO</title>
</head>
<body>
    <?php 
      require_once 'lutador.php';

      $lutadores = array();

      $lutadores[0] = new Lutador("Pretty Boy", "Fran�a", 31, 1.75, 68.9, 11, 2, 1); 
      $lutadores[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
      $lutadores[2] = new Lutador("Snapshadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
      $lutadores[3] = new Lutador("Dead Code", "Austr�lia", 28, 1.93, 81.6, 13, 0, 2);
      $lutadores[4] = new Lutador("Ufocobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3);
      $lutadores[5] = new Lutador("Nerdaart", "EUA", 30, 1.81, 105.7, 12, 2, 4);

      $lutadores[0]->apresentar();
      $lutadores[1]->apresentar();
      $lutadores[2]->apresentar();
    ?>
</body>
</html>