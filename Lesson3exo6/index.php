<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lesson 3 exercise 6 </title>
  </head>
  <body>
    <!--Récupérez le fichier data.php (dans le même dossier que l'énnoncée).-->
    <!--  Intégrez ce fichier dans un fichier index.php et stockez son contenu dans une variable.-->
  <?php
  $data = include("data1.php");
  $prenom = isset($_POST["prenom"]) ? $_POST["prenom"]: "";
  //$nom = isset($_POST["nom"]) ? $_POST["nom"]: "";
  ?>
  <!--  Ecrivez un formulaire dans index.php qui a pour action lui-même et en méthode POST.-->
  <form action = "index.php" method="POST">
  Prénom : <input type = "text" name = "prenom"><br />
  <input type = "submit" value = "Envoyer">
  </form>
  <!--  En fonction du prénom donné dans l'input du formulaire affichez le nom de famille.-->
  <!--  Si le prénom n'est pas répertorié, affichez une erreur en listant les prénoms possibles.-->
  <?php
  if ($prenom) {
    echo $prenom . " " . $data[$prenom][0];
  } else {
    foreach ($data as $key => $value) {
      echo "$key<br>";
  }
}
  ?>
  </body>
  </html>
