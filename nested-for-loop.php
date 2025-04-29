<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>nested for loop</title>
  <style>
    body {
      background-color: black;
      color: white;
    }
  </style>
</head>
<body>
  <?php
    for($i = 1; $i <= 3; $i++){
      // echo $i;
      // echo "<br>";
      for($j = 1; $j <= 3; $j++){
        echo "$i $j <br />";
      }
    }
  ?>
</body>
</html>