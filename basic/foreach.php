<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>for each</title>
  <style>
    body {
      background-color: black;
      color: white;
    }
  </style>
</head>
<body>
  <?php
    $superheroes = [
      "Superman",
      "Batman",
      "Wonder Woman",
      "Spider-Man",
      "Iron Man",
      "Hulk",
      "Thor",
      "Captain America",
      "Black Panther",
      "Flash"
    ];

    // foreach($superheroes as $hero){
      // if ($hero == "Spider-Man"){
      //   continue;
      // }
      // echo "<h1>".$hero."</h1>";
      // if($hero == "Iron Man"){
      //   break;
      // }
    // }

    foreach($superheroes as $x):
      echo $x;
      echo "<br>";
    endforeach
  ?>
</body>
</html>