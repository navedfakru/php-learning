<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  <style>
    body {
      background-color: black;
      color: white;
    }
  </style>
</head>

<body>
  <table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Course</th>
      <th scope="col">Batch</th>
      <th scope="col">City</th>
      <th scope="col">Year</th>
      <th scope="col">Delete Entry</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
  <?php
  include("./config.php");
  $getStudents = $conn->prepare("SELECT * FROM students");
  $getStudents->execute();
  $students = $getStudents->fetchAll();
  // print_r($students);
  foreach ($students as  $student) {
    echo "<tr>";
    echo "<th scope='row'>" . $student['id'] . "</th>";
    echo "<td>" . $student['name'] . "</td>";
    echo "<td>" . $student['course'] . "</td>";
    echo "<td>" . $student['batch'] . "</td>";
    echo "<td>" . $student['city'] . "</td>";
    echo "<td>" . $student['year'] . "</td>";
    echo "<td><button>" ."delete". "</button></td>";
    echo "</tr>";
  }
  ?>
  </tbody>
  </table>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>

</html>