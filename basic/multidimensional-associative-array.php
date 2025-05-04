<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>multidimensional associative array</title>
  <style>
    body {
      background-color: black;
      color: white;
    }
    .border {
      border:  2px solid white;
      margin-bottom: 10px;
      text-align:  center;
      background-color: yellow;
      color: red;
    }
  </style>
</head>
<body>
  <?php
    $users = [
      [
        "name" => "anil",
        "age" => 29,
        "city" => "noida"
      ],
      [
        "name" => "sam",
        "age" => 23,
        "city" => "delhi"
      ],
      [
        "name" => "peter",
        "age" => 42,
        "city" => "gurgaon"
      ],
      [
        "name" => "bruce",
        "age" => 35,
        "city" => "ammesterdham"
      ],
    ];

    // echo "<pre>";
    // print_r($users);
    // echo "</pre>"

    foreach($users as $user){
      echo "<div class='border'>";
      foreach($user as $key => $item) {
        echo "<h1>$key = $item</h1>";
      }
      echo "</div>";
      // echo "<h1>".$user['name']."</h1>";
    }
  ?>
</body>
</html>