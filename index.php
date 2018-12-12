<?php
session_start();
// Démarrage ou restauration de la session avant le demarrage du Html.
//Une session est un mécanisme technique (c'est aussi un tableau associatif) permettant de sauvegarder temporairement sur le serveur des informations relatives à un internaute.

$_SESSION['lastname'] = 'DOE';
// Ecriture d'une nouvelle valeur dans le tableau de session
$_SESSION['firstname'] = 'John';
$_SESSION['age'] = 17;
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Partie8_Exo2</title>
  </head>
  <body>
    <?php
/*Sur la page index, faire un liens vers une autre page. Passer d'une page à l'autre le contenu des variables lastname, firstname et age grâce aux sessions. Ces variables auront été définies directement dans le code.
Il faudra afficher le contenu de ces variables sur la deuxième page. */
     ?>
<a href="page.php">Ma deuxième Page</a>


  </body>
</html>
