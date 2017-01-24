<?php

function pair($user) {
  if ($i%2 == 0) {
    return true;
  }
  return false;
}

if pair(9){
  echo "9 est pair";
} else {
  echo "9 n'est pas pair";
}
?>
