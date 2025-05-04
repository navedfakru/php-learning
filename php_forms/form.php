

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
  <?php
// print_r($_POST);
if(isset($_POST['name'])){
  echo "<p>User name is ". $_POST['name']."</p>";
  echo "<p>User name is ". $_POST['email']."</p>";
  echo "<p>User name is ". $_POST['password']."</p>";
  echo "<p>User name is ". $_POST['city']."</p>";
  echo "<p>User name is ". $_POST['gender']."</p>";
  echo "<p>User name is ". $_POST['bio']."</p>";
  echo "<p>User name is ". implode(", ", $_POST['skills']) ."</p>";
}
?>
</body>
</html>