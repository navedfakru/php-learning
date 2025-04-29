<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>display data from array</title>
  <style>
    body {
      background-color: black;
      color: white;
    }

    table {
      border: 1;
      flex-direction: column;
    }

    .div {
      display: flex;
      justify-items: center;
      align-items: center;
      height: 100vh;
      flex-direction: column;
    }
    .tr {
      background-color: #fff;
      color: black;
    }
  </style>
</head>

<body>
  <?php

  function tabel()
  {
    $users = [
      [1, "anil", "anil@test.com"],
      [2, "sam", "sam@test.com"],
      [3, "peter", "peter@test.com"],
      [4, "tony", "tony@test.com"],
      [5, "bruce", "bruce@test.com"]
    ];
    echo "<table border='1'>";
    echo "<tr class='tr'>
        <td>S.N.</td>
        <td>Name</td>
        <td>Email</td>
      </tr>";
    for ($i = 0; $i < count($users); $i++) {
      echo "<tr>";
      for ($j = 0; $j < count($users[$i]); $j++) {
        echo "<td>";
        echo $users[$i][$j];
        echo "</td>";
      }
      echo "</tr>";
    }
    echo "</table>";
  }
  for ($i = 0; $i < 200; $i++) {
    echo "<div class='div'>";
    echo "<h1 style='color: red; background-color: yellow; width: 100%; text-align: center;'>$i</h1>";

    tabel();
    echo "</div>";
  }
  ?>
</body>

</html>