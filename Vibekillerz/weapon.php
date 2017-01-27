<?php //  ARMES !!
class weapon
{
//Attributs
private $weapon;
private $dmg;

// getter par attribut et setter !
public function getWeapon()
{
  return $this->weapon;
}
public function getDMG()
{
  return $this->dmg;
}

//constructeur
public function __construct($weapon,$degats)
{
  $this->weapon = $weapon;
  $this->degats = $degats;
}
//methodes

public function attack($name)
{
  $weapon->causeDamage($this->degats);
}
}
?>
