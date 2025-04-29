<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>break and continue</title>
</head>
<style>
  body {
    background-color: black;
    color: white;
  }
</style>
<body>
  <?php
  // for($i = 0; $i <= 10; $i++){
  //   echo $i;
  //   echo "<br>";
  //   if($i == 5){
  //     break;
  //   }
  // }

  for($i = 0; $i <= 10; $i++){
    if($i == 3 || $i == 7){
      continue;
    }
    echo $i;
    echo "<br>";
  }
  ?>
</body>
</html>