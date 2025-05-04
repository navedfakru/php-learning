<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>function</title>
  <style>
    body {
      background-color: black;
      color: white;
    }
  </style>
</head>
<body>
  <?php
    function outer(){
      echo "<h1>User Details</h1>";
    }
    function displayUserDetails(){
      outer();
      echo "user name is naved";
      echo "<br>";
      echo "user age is 23";
      echo "<br>";
      echo "user email id is anil@latest.com";
      echo "<hr>";
    }

    displayUserDetails();
    displayUserDetails();
    displayUserDetails();
    displayUserDetails();
  ?>
</body>
</html>