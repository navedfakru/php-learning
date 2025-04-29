<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>function default paramenter </title>
  <style>
    body {
      background-color: black;
      color: white;
    }
  </style>
</head>
<body>
  <?php
    // function fruit($name, $color="green"){
    //   echo "this $name and it's color $color";
    // }

    // fruit("apple", "red")

    function displayUser($name, $color = "red"){
      echo "<h1 style='color: $color'>$name</h1>";
    }

    displayUser("Naved")
  ?>
</body>
</html>