<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Method Overiding</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  <style>
    body {
      background-color: black;
      color: white;
    }
  </style>
</head>

<body>
  <?php
    class Teacher {
      public $city = "Delhi";
      function nextExam(){
        echo "next exam is maths";
      }
      function age(){
        echo "my age is 40";
      }
    }

    class Student extends Teacher{
      public $city = "Shamli";
      function age(){
        echo "my age is 20";
      }
    }

    $s1 = new Student();
    $s1->age();
    echo "<br>";
    echo $s1->city;

  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>

</html>