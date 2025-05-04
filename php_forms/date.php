<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>date</title>
  <style>
    body {
      background-color: black;
      color: white;
    }
  </style>
</head>
<body>
  <?php
    date_default_timezone_set("Asia/Kolkata");
    echo date("D M Y");
    echo "<br>";
    echo date("h:i:sa")
  ?>
</body>
</html>