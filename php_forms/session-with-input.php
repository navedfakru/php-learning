<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>session with input</title>
  <style>
    body {
      background-color: black;
      color: white;
    }
  </style>
</head>
<body>
  <form action="" method="post">
    <input type="text" name="user" id="" placeholder="Enter user name"><br><br>
    <button name="button" value="set">set session</button><br><br>
    <button name="button" value="get">get session</button><br><br>
    <button name="button" value="delete">delete session</button><br><br>
  </form>
  <?php
    session_start();
    if(isset($_POST['button'])){
      if($_POST['button'] == 'set'){
        $val = $_POST['user'];
        $_SESSION['user'] = $val;
      }
      if(isset($_SESSION['user'])){
        if($_POST['button'] == 'get'){
          $val = $_SESSION['user'];
          echo "<h1>$val</h1>";
        }
      }
      if(isset($_SESSION)){
        if($_POST['button'] == 'delete'){
          session_destroy();
        }
      }
    }

  ?>
</body>
</html>