<?php
// Database connection details
$host = 'ep-jolly-lab-a173514j.aws-ap-southeast-1.pg.laravel.cloud';
$port = '5432';
$dbname = 'main';
$username = 'laravel';
$password = 'npg_4VsSC5BTjvge';

try {
  // Create a new PDO instance
  $dsn = "pgsql:host=$host;port=$port;dbname=$dbname;";
  $pdo = new PDO($dsn, $username, $password, [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  ]);

  echo "Connected to the database successfully!<br>";

  // Query to fetch all tables in the database
  $query = "SELECT table_name FROM information_schema.tables WHERE table_schema = 'public'";
  $stmt = $pdo->query($query);

  echo "Tables in the database:<br>";
  foreach ($stmt as $row) {
    echo $row['table_name'] . "<br>";
  }
} catch (PDOException $e) {
  echo "Error: " . $e->getMessage();
}
?>