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
  <?php
  include("./config.php");
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $getStudentData = $conn->prepare("Select * from students where id = '$id'");
    $getStudentData->execute();
    $student = $getStudentData->fetchAll();
    // print_r($student);
    $name = $student[0]['name'];
    $course = $student[0]['course'];
    $batch = $student[0]['batch'];
    $city = $student[0]['city'];
    $year = $student[0]['year'];
  }

  ?>

  <form class="mx-auto" action="student.php" method="post" style="width:400px;">
    <div class="input-group my-2">
      <span class="input-group-text">Name</span>
      <input type="text" value="<?php echo $name ?>" name="name" class="form-control">
    </div>
    <div class="input-group my-2">
      <span class="input-group-text">Course</span>
      <input value="<?php echo $course ?>" type="text" name="course" class="form-control">
    </div>
    <div class="input-group my-2">
      <span class="input-group-text">Batch</span>
      <input value="<?php echo $batch ?>" type="text" name="batch" class="form-control">
    </div>
    <div class="input-group my-2">
      <span class="input-group-text">City</span>
      <input type="text" value="<?php echo $city ?>" name="city" class="form-control">
    </div>
    <div class="input-group my-2">
      <span class="input-group-text">Year</span>
      <input type="text" value="<?php echo $year ?>" name="year" class="form-control">
    </div>
    <div class="input-group my-2">
        <button class="btn btn-primary" name="update" value="<?php echo $id ?>">Update</button>
    </div>
  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>

</html>