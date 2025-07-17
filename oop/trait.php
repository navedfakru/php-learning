<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>trait.php</title>
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
  trait parentCompany{
    function getTotalEmp(){
      echo 500;
    }
  }
  trait parentCompany2{
    function getTotalOffice(){
      echo 10;
    }
  }

  class Company {
    use parentCompany;
    use parentCompany2;
  }

  $cmp = new Company();
  $cmp->getTotalEmp();
  echo "<br>";
  $cmp->getTotalOffice();

  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>

</html>