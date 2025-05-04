<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>function wiht return</title>
  <style>
    body {
      background-color: black;
      color: #fff;
    }
  </style>
</head>
<body>
  <?php
    function userName(){
      return "anil sidhu";
    }

    echo "<h1>Hi current user is ". userName()." </h1>";
  ?>
</body>
</html>