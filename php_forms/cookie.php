<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>cookie</title>
  <style>
    body {
      background-color: black;
      color: white;
    }
  </style>
</head>

<body>
  <?php
  $fruite = "apple";
  setcookie("fruit", $fruite, time()+(86400));
  setcookie("color", "blue", time()+(86400));
  setcookie("theme", "dragon", time()+(86400));
  if(isset($_COOKIE['fruit'])){
    $arr = $_COOKIE;
    echo $arr["fruit"];
    echo "<br>";
    print_r($_COOKIE);
  }else {
    echo "no cookie set";
  }
  ?>
</body>

</html>