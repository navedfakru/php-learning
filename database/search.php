<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  <style>
    body {
      background-color: black;
      color: white;
    }
  </style>
</head>

<body>
  <form action="" method="post">
    <input type="text" name="search" placeholder="enter name">
    <br><br>
    <button>search</button>
  </form>
  <?php
    include('./config.php');
    if(isset($_POST['search'])){
      $search = $_POST['search'];
      $students = $conn->prepare("SELECT * from students where name = '$search'");
      $students->execute();
      $result=$students->fetchAll();

      echo '
      <table class="table table-dark table-hover">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Name</th>
        <th scope="col">Course</th>
        <th scope="col">Batch</th>
        <th scope="col">City</th>
        <th scope="col">Year</th>
        <th scope="col">Delete</th>
        <th scope="col">Update</th>
      </tr>
    </thead>
    <tbody class="table-group-divider">
      ';
      foreach ($result as  $student) {
        echo "<tr>
         <th scope='row'>" . $student['id'] . "</th>
         <td>" . $student['name'] . "</td>
         <td>" . $student['course'] . "</td>
         <td>" . $student['batch'] . "</td>
         <td>" . $student['city'] . "</td>
         <td>" . $student['year'] . "</td>
         <th><form method='post'>
         <button class='btn btn-primary' name='delete' value=".$student['id'].">delete</button></form></th>
         <th><button class='btn btn-danger'><a class='nav-link' href='update.php?id=".$student['id']."'>edit</a></button></th>
         </tr>";
      }

      echo "
       </tbody>
  </table>
      ";
    }
  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>

</html>