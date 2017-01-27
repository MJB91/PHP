<!DOCTYPE>
<html>
<head>
<meta charset="utf-8">
  <title> !! Vibe Killerz !!
  </title>
</head>
<body>
<?php
include('personnage.php');
include('weapon.php');

$c1 = new character("Mary Jane", 200, 50);
$c2 = new character("Klady Cool", 220, 47);

/*
echo " Le combat légendaire entre ".$c1->getName(). " vs " .$c2->getName() ." va commencer !";

function combat($character1, $character2){
/* perso1 tape perso2, du coup un perso perd des $HP
  echo "<br> GO !";
  do {
     $character1->attack($character2);
     echo "<br/>Lance Hotline Bling de Drake.";
  } while ($character2->isAlive());

  do {
    $character2->attack($character1);
    echo "<br/>Contre Attaque avec What is Love de Haddaway !";
} while ($character2->causeDamage($character1 = 0));
}
combat ($c1,$c2);
 */
echo "Le combat légendaire entre ".$c1->getName(). " vs "
  .$c2->getName(). " va commencer !<br />";
  echo "GO !<br />";
$winner = combat($c1, $c2);
echo  $winner->getName()." KILLED THE VIBE ! ";


function combat($c1, $c2) {
  $character1 = random($c1, $c2);
  $character2 =  ($character1 == $c1 ? $c2 : $c1);
  while ($character1->isAlive() && $character2->isAlive()) {
    echo $character1->getName() . " attaque " . $character2->getName();
    $character1->attack($character2);
    echo "<br />Il reste " . $character2->getHP() . "HP à " . $character2->getName() . "<br/>";
    echo "<br />";
    $temp = $character2;
    $character2 = $character1;
    $character1 = $temp;
  }
  if ($character1->isAlive()) {
    return $character1;
  }
  return $character2;
  // return random($personnage1, $personnage2);
}

function random($character1, $character2) {
  $random = rand(0,1);
  if($random == 0) {
    return $character1;
  } else {
    return $character2;
  }
}

//  WEAPONS !! YIHAAAA PATATATATAPOW !

?>

</body>
</html>
