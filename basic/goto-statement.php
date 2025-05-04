<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>go to statement</title>
  <style>
    body {
      background-color: black;
      color: white;
    }
  </style>
</head>
<body>
  <?php

  // $x = 10;
  // echo "before condition <br/>";
  // if($x == 20){
  //   goto jump;
  // }
  // $name = "naved <br>";
  // echo $name;



  // jump:
  // echo "statement is humped on line nu 28";

  
  for($i = 0; $i < 10; $i++){
    
    echo "$i <br>";
    
    if ($i == 5){
      goto outsideLoop;
    }
  }
  
  outsideLoop:
  echo "loop is break";
  ?>
</body>
</html>