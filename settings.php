<?php
$dsn = 'mysql:dbname=thewall;host=127.0.0.1';
$user = 'root';
$password = '';

try {
  $database = new PDO($dsn, $user, $password);

} catch(PDOException $e) {
  echo "connection fialed: " . $e->getMessage();
}




?>
