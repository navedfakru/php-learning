<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>add remove</title>
  <style>
    body {
      background-color: black;
      color: white;
    }
  </style>
</head>
<body>
  <?php
    $users = ["anil", "sam", "bhaskar", "praveen"];
    
    // array_pop($users);
    // array_pop($users);
    // array_pop($users);
    // array_push($users, "peter", "bruce", "tony");
    array_splice($users, 2);
    
    print_r($users);
  ?>
</body>
</html>