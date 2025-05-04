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
  <?php
    $path = "./../";
    $items = scandir($path);
    $items = array_diff($items, array(".", ".."));
    print_r($items);
    foreach($items as $item){
      echo "<h1>
      <a  target='_blank' href='./../$item'>$item</a>
      </h1>";
    }
  ?>
</body>
</html>