<?php
session_start();
// Démarrage ou restauration de la session
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ma Deuxieme Page Exo2</title>
  </head>
  <body>
    <p><?php echo $_SESSION['lastname']; // // Lecture d'une valeur du tableau de session ?></p>
    <p><?php echo $_SESSION['firstname']; ?></p>
    <p><?php echo $_SESSION['age']; ?></p>
  </body>
</html>
