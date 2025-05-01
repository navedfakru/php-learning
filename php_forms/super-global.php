<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>super global</title>
  <style>
    body {
      background-color: black;
      color: white;
    }
  </style>
</head>
<body>
  <?php
    $a=10;
    const data = "20";
    echo "<pre>";
    print_r($_REQUEST);
    // print_r($_POST);
    // print_r($_GET);
    // print_r($_COOKIE);
    // print_r($_REQUEST);
    // print_r($_SERVER);
    // print_r($GLOBALS);
    echo "<pre>";
    ?>
</body>
</html>