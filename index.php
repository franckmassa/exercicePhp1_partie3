<?php
$money = 0;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>Exercice1</title>
</head>
<body>
  <p>
    <?php
    //On incrémente tant que l'on est pas arrivé à 10
    while($money <= 10){
      echo $money++ . '<br/>';
    }
    ?>
  </p>
</body>
</html>
