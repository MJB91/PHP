<?php
session_start();

if (!isset($_SESSION["compteur"])) {
  $_SESSION["compteur"] = 1;
} else {
  $_SESSION["compteur"]++;
}

echo $_SESSION["compteur"];

$cookie_name = 'blank';
$cookie_value = 'oley';
$expire = time() + (7 * 24 * 60 * 60); // Expire la semaine prochaine
setcookie($cookie_name, $cookie_value, $expire)

?>
