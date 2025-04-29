<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Associative Array</title>
  <style>
    body {
      background-color: black;
      color: white;
    }
  </style>
</head>
<body>
  <?php
    $userDetails=[
      "name" => "anil",
      "age"=>30,
      "city"=>"delhi",
      "email"=>"abc@update.com",
      "state"=>"up"
    ];
    // var_dump($userDetails);
    foreach($userDetails as $key => $data):
      echo "<h1>$key => $data</h1>";
    endforeach;
    // foreach($userDetails as $key => $data){
    //   echo "<h1>$key => $data</h1>";
    // }
  ?>
</body>
</html>