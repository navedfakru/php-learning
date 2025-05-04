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
    function test(){
      echo "<p>test function called</p>";
      function inner(){
        echo "<p>inner function called</p>";
      }
      inner();
    }

    test();
  ?>
</body>
</html>