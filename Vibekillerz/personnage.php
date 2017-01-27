<?php
// Une classe représentant un personnage
class character
{
// Attributs
private $name;
private $HP;
private $AP;
private $weapon;

// getter par attribut, aucun setter !
public function getName()
{
  return $this->name;
}
public function getHP()
{
  return $this->HP;
}
public function getAP()
{
  return $this->AP;
}
public function getWeapon()
{
  return $this->weapon;
}
public function setWeapon()
{
  return $this->weapon;
}
//constructeur comprenant les 3 arguments $name $HP $AP
public function __construct($name, $HP, $AP)
{
  $this->name = $name;
  $this->HP = $HP;
  $this->AP = $AP;
  $this->setWeapon(new weapon("Hotline Bling", 100));
  $this->setWeapon(new weapon("Scatman Killer", 20));
}

// ajouter methode publique "estVivant()" : true si vivant, false si mort.

  public function isAlive()
  {
      return $this->HP > 0;
}

// ecrire methode public "causeDamage($damage)" qui enlève des pv au character

  public function causeDamage($damage){
    if ($damage >= $this->HP) {
    $this->HP = 0;
  } else {
    $this->HP -= $damage;
    echo " <br> OUCH ! Ca fait mâl !  ";
  }
}
// ecrire methode public "attack($name)" qui cause à $personnage le nombre de pts
// de dégats égal aux points d'attaque

public function attack($name)
{
  $degats = $this->AP;
  if ($this->getWeapon() != null){
    $degats += $this->getWeapon()->getDegats($name);
    echo $character1->getName()." lance ". $weapon->getName()." à ". $character2->getName();
  }
  $name->causeDamage($this->AP);
}
}

?>
