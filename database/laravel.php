<?php
$host = 'db-9ed0333c-840e-4b2b-8b09-8b8917a6bc9a.ap-southeast-1.public.db.laravel.cloud';
$db   = 'main';
$user = 'os9fjid9bcilq51i';
$pass = 'W24ZbicLfY5X3WSHXs5u';
$port = 3306;

try {
  $dsn = "mysql:host=$host;port=$port;dbname=$db;charset=utf8mb4";
  $options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Throw exceptions on errors
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // Fetch as associative arrays
    PDO::ATTR_EMULATE_PREPARES   => false,                  // Use native prepares if available
  ];

  $conn = new PDO($dsn, $user, $pass, $options);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $getStudents = $conn->prepare("SELECT * FROM users");
  $getStudents->execute();
  $students = $getStudents->fetchAll();
  echo "<pre>";
  print_r($students);
  echo "✅ Connected successfully to Laravel Cloud DB using PDO!";
} catch (PDOException $e) {
  die("❌ Connection failed: " . $e->getMessage());
}
