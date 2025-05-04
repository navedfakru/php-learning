<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body {
      background-color: black;
      color: white;
    }
  </style>
</head>
<body>
  <form action="" method="post">
    <input type="text" name="user" id="" placeholder="enter user name"><br><br>
    <button name="button" value="set">set cookie</button><br><br>
    <button name="button" value="display">Display cookie</button><br><br>
    <button name="button" value="delete">Delete cookie</button><br><br>
  </form>
  <?php

  if(isset($_POST['button'])){
    if($_POST['button']== 'set'){
      $val = $_POST['user'];
      setcookie('user', $val, time()+(86400));
    };
  }

  if($_POST['button'] == 'display'){
    if(isset($_COOKIE['user'])){
      $user = $_COOKIE['user'];
      echo "<h1>$user</h1>";
    }
  }
  if($_POST['button'] == 'delete'){
    if(isset($_COOKIE['user'])){
      setcookie("user",null,-1);
    }
  }
  ?>
</body>
</html>