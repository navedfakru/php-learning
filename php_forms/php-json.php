<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php json</title>
  <style>
    body {
      background-color: black;
      color: white;
    }
  </style>
</head>
<body>
  <?php
    // $user = ["name" => "peter", "age" => 30, "email" => "peter@peter.com"];
    // $userJson = json_encode($user);
    // echo $userJson;
    $data='{"name":"peter","age":30,"email":"peter@peter.com"}';
    $dataArray = json_decode($data, true);
    print_r($dataArray);
  ?>
</body>
</html>