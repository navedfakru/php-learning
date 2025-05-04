<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>while loop</title>
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
    while($num > 0){
      echo $num;
      echo "<br>";
      $num--;
    }
    // $num = 0;
    // while($num < 10){
    //   echo $num;
    //   echo "<br>";
    //   $num++;
    // }
  ?>
</body>
</html>