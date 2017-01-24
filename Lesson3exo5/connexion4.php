<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
  <title>Lesson 3 exo 5 </title>

</head>
<body>
  <?php
  $username = isset($_POST['username']) ? $_POST['username'] : "" ;
  $password = isset($_POST['password']) ? $_POST['password'] : "" ;

  if ($username == "_blank" && $password == "olé") {
    echo "<p>MOUHAHAHAHAHAHAAA !</p>";
  } else {
    echo "<p>HEUU T'ES QUI TOI ?</p>";
  }
  ?>
</body>
</html>
