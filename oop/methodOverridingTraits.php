<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Method Overrriding Traits </title>
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

  trait ParentCompany1 {
    function getEmp(){
      echo 200;
    }
  }

  trait ParentCompany2{
    function getEmp(){
      echo 300;
    }
  }

  class Company{
    use ParentCompany1;
    use ParentCompany2{
      ParentCompany1::getEmp insteadOf ParentCompany2;
      ParentCompany2::getEmp as getEmpCompany2;
    }


    // function getEmp(){
    //   echo 100;
    // }
  }

  $c1 = new Company();
  $c1->getEmp();
  echo "<br>";
  $c1->getEmpCompany2();
  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>

</html>