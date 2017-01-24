<?php

echo 0 != 0 ? "ok" ; "not ok";

//same as
 if (0 != 0) {
   console.log("ok");
 } else {
   console.log("not ok");
 }
?>


<?php if($user != null) { ?>
 <h1>Connexion réussie</h1>
 <p>Bienvenue, <?php echo $user; ?> !</p>
<?php } else { ?>
  <h1>Connexion échouée</h1>
<?php } ?>
