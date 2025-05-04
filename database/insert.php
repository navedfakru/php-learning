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
  <form class="mx-auto" action="" method="post" style="width:400px;">
    <div class="input-group my-2">
      <span class="input-group-text">Name</span>
      <input type="text" aria-label="First name" name="name" class="form-control">
    </div>
    <div class="input-group my-2">
      <span class="input-group-text">Course</span>
      <input type="text" aria-label="First name" name="course" class="form-control">
    </div>
    <div class="input-group my-2">
      <span class="input-group-text">Batch</span>
      <input type="text" aria-label="First name" name="batch" class="form-control">
    </div>
    <div class="input-group my-2">
      <span class="input-group-text">City</span>
      <input type="text" aria-label="First name" name="city" class="form-control">
    </div>
    <div class="input-group my-2">
      <span class="input-group-text">Year</span>
      <input type="text" aria-label="First name" name="year" class="form-control">
    </div>
    <div class="input-group my-2">
      <button type="submit">Submit</button>
    </div>

  </form>
  <?php
  include("./config.php");
  if (isset($_POST['name'])) {
    echo "<pre>";
    print_r($_POST);
    $name = $_POST['name'];
    $course = $_POST['course'];
    $batch = $_POST['batch'];
    $city = $_POST['city'];
    $year = $_POST['year'];

    $student = $conn->prepare("
    INSERT INTO `students` (`id`, `name`, `course`, `batch`, `city`, `year`)
    VALUES (NULL, '$name', '$course', '$batch', '$city', '$year')
    ");
    $result = $student->execute();
    if ($result) {
      echo "Data inserted";
    } else {
      echo "Opration faild";
    }
  }

  ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>

</html>