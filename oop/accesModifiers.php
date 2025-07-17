<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Access Moididfiers</title>
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
    class Teachers{
      private function questionPapers(){
        return "important";
      }

      function exam(){
        if($this->questionPapers() == "important"){
          echo "do somthenign";
        }else {
          echo "you are not permium user";
        }
      }

      protected function studentMarks(){
        echo "all students marks";
      }

    }

    class Management extends Teachers{
      function reviewExam(){
        $this->studentMarks();
      }
    }

    $t1 = new Teachers();
    $m1 = new Management();
    // $t1->exam();
    $m1->reviewExam();
  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>

</html>