<?php
// stocker les données en session
session_start();
$login_base = "admin";
$pwd_base = "blank";
$login = $_POST['login'];
$pwd = $_POST['password'];

if (isset($login) && isset($pwd) && $login == $login_base && $pwd_base == $pwd){
//  $_SESSION['login'] == $login;
//  $_SESSION['password'] == $pwd;
  echo "Wesh Bienvenue Poto";
} else {
  echo "T'es sûr ?";
}
?>
