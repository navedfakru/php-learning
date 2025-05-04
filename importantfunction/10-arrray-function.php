<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>10 array function</title>
  <style>
    body {
      background-color: black;
      color: white;
    }
  </style>
</head>
<body>
  <?php
    $users = ["naved", "ali", 121];
    $user = ["name" => "naved ali", "age" => 23, "email" => "naved10055@gmail.com"] ;
    // $users = "abc";

    // if(is_array($users)){
    //   echo "this is an array";
    // }else {
    //   echo 'this is not an array';
    // }

    // echo count($users);

    // unset($users[1]);
    // print_r($users);
    // print_r(array_keys($users));
    // echo implode($users);
    // $str = "hello how are you trump?";
    // echo $str;
    // print_r(explode(" ", $str))
    $data = array_merge($user, $users);
    print_r($data);
  ?>
</body>
</html>