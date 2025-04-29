<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>parameter with function</title>
  <style>
    body {
      background-color: black;
      color: #fff;
    }
  </style>
</head>
<body>
  <?php
    // function sum($a, $b){
    //   echo $a + $b;;
    //   echo "<br>";
    // }

    // sum(3, 2)

    function userData($color, $name){
      echo "<h1 style='color:$color'>$name</h1>";
    }
    userData('green', 'Naved Ali');
    userData('red', 'Naved');
    userData('yellow', 'Ali');
  ?>
</body>
</html>