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
      echo "test function called";
    }
    $fun = "test";
    // $fun()

    function main($fun){
      $fun();
      // echo "main function called";
    }

    main($fun);
  ?>
</body>
</html>