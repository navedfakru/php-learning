<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>do while loop</title>
  <style>
    body {
      background-color: black;
      color: white;
    }
  </style>
</head>
<body>
  <?php
    $num = 10;
    do {
      echo "Current loop value is $num <br/>";
      $num--;
    } while ($num > 0);
  ?>
</body>
</html>