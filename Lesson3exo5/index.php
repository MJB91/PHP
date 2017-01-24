<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
  <title>Lesson 3 exo 5 </title>
  <style>
  body{
    font-family: Helvetica, sans-serif;
    font-size: 15px;
  }
  .login{
    background-color: pink;
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
    <form action="connexion4.php" method="post">
    Login:<br> <input type="text" name="username" placeholder="your username" />
    <input type="checkbox" name="remember" /> Remember Me !<br>
    Password: <br><input type="password" name="password" placeholder="your password" /><br><br>
    <input type="submit" name="connexion" value="connexion" />
    </form>
  </div>
</body>
</html>
