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
  <form action="" method="post">
    <input type="text" name="filename" id="" placeholder="Enter file name">
    <br>
    <br>
    <textarea name="content" id="" placeholder="enter file content"></textarea>
    <br>
    <br>
    <button>Create File</button>
  </form>
  <?php
  if (isset($_POST['filename'])) {
    $fileName = "files/" . $_POST['filename'];
    $content = $_POST['content'];
    $file = fopen($fileName, "w") or die("unable to create file");
    fwrite($file, $content);
    fclose($file);
    echo "file create";
  }
  ?>
</body>

</html>