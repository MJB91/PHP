<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
  <title>Login en PHP</title>
  <style>
  body{
    font-family: Helvetica, sans-serif;
    font-size: 15px;
  }
  .login{
    background-color: grey;
    margin: 0%;
    width: 50%;
    padding: 10px;
    border-radius: 2px;
    border: 5px;
  }
  </style>
</head>
<body>
  <div class="login">
  <form action="connexion.php" method="post">
    Login:<br> <input type="text" name="login" value="login" />
    <input type="checkbox" name="remember" value="remember" /> Remember Me !<br>
    Password: <br><input type="password" name="password" value="password" /><br><br>
    <input type="submit" name="connexion" value="Connexion" />
  </form>
  </div>
</body>
</html>
