<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body {
      background-color: black;
      color: white;
    }
  </style>
</head>
<body>

<form action="" method="post" enctype="multipart/form-data">
  <input type="file" name="file" id="">
  <br>
  <br>
  <button>Read File</button>
</form>
  <?php

  if(isset($_FILES['file'])){
    // echo print_r($_FILES['file']);
    $file = $_FILES['file']['tmp_name'];
    $myFile = fopen($file, 'r') or die("unable to read file");
    echo fread($myFile, filesize($file));
    fclose($myFile);
  }
  ?>
</body>
</html>