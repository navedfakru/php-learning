<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>constant</title>
  <style>
    body {
      background-color: black;
      color: white;
    }
  </style>
</head>
<body>
  <?php
  $cookie = $_COOKIE['color'];
    echo "<h1>current cookies kya hai $cookie</h1>";
  ?>
</body>
</html>