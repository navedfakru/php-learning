<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>oop student</title>
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
  include('config.php');
  class Student
  {
    public $DBconn;
    function __construct($conn)
    {
      $this->DBconn = $conn;
    }

    function getData()
    {
      $getStudents = $this->DBconn->prepare("select * from students");
      $getStudents->execute();
      $result = $getStudents->fetchAll();
      return $result;
    }

    function deleteData($id)
    {
      if ($id) {
        $getStudents = $this->DBconn->prepare("delete from students where id = '$id'");
        $getStudents->execute();
      } else {
        echo "I don't know your id";
      }
    }

    function insertData($request)
    {
      $name = $request['name'];
      $course = $request['course'];
      $batch = $request['batch'];
      $city = $request['city'];
      $year = $request['year'];
      if ($name && $course && $batch && $city && $year) {
        $data = "
          INSERT INTO `students` (`id`, `name`, `course`, `batch`, `city`, `year`)
        VALUES (NULL, '$name', '$course', '$batch', '$city', '$year')
          ";
        $insertData = $this->DBconn->prepare($data);
        $insertData->execute();
        header('Location: student.php');
        exit();
      }
    }

    function updateData($request){
      $id = $request['update'];
      $name = $request['name'];
      $course = $request['course'];
      $year = $request['year'];
      $batch = $request['batch'];
      $city = $request['city'];
      $updateData = "
      update students SET 
        name='$name',
        course='$course',
        batch='$batch',
        city='$city',
        year='$year'
        where id='$id'
      ";
      $updated = $this->DBconn->prepare($updateData);
      $updated->execute();
      header('Location: student.php');
      exit();
    }

  }
  $students = new Student($conn);
  ?>
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
        <th scope="col">Edit</th>
      </tr>
    </thead>
    <tbody class="table-group-divider">
      <?php
      foreach ($students->getData() as $student):
        echo "<tr>
         <th scope='row'>" . $student['id'] . "</th>
         <td>" . $student['name'] . "</td>
         <td>" . $student['course'] . "</td>
         <td>" . $student['batch'] . "</td>
         <td>" . $student['city'] . "</td>
         <td>" . $student['year'] . "</td>
         <th><form method='post'>
         <button class='btn btn-primary' name='delete' value=" . $student['id'] . ">delete</button></form></th>
         <th><button class='btn btn-danger'><a class='nav-link' href='update.php?id=" . $student['id'] . "'>edit</a></button></th>
         </tr>";
      endforeach;
      echo "
  
  </tbody>
  </table>
  <button class='btn btn-primary d-block mx-auto'><a class='nav-link' href='student.html'>Add more +</a></button>
      ";

      if (isset($_POST['delete'])) {
        $students->deleteData($_POST['delete']);
        header('Location: student.php');
        exit();
      }
      
      if (isset($_POST['name']) && !isset($_POST['update'])) {
        $students->insertData($_POST);
        exit();
      }
      
      if (isset($_POST['update'])) {
        $students->updateData($_POST);
        exit();
      }
      ?>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>

</html>