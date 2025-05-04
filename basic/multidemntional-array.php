<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>multidemntional array</title>
  <style>
    body {
      background-color: black;
      color: white;
    }
  </style>
</head>
<body>
  <?php
    $user=["anil", "nodia", "anil@gmail.com"];
    $users=[
      [1, "anil", "noida", "anil@gmail.com"],
      [2, "sam", "delhi", "sam@test.com"],
      [3, "peter", "gurgaon", "peter@test.com"]
    ];

    // echo "<pre>";
    // print_r($users);
    // echo "<pre>"

    foreach($users as $x):
      foreach($x as $y){
        echo "<h1>$y<h1>";
      }
    endforeach;
  ?>
</body>
</html>