<?php

define('DSN', 'mysql:host=mysql;dbname=test;charset=utf8mb4');
define('DB_USER', 'test');
define('DB_PASS', 'test');

try {
  $pdo = new PDO(
    DSN,
    DB_USER,
    DB_PASS,
    [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ]
  );
} catch (PDOException $e) {
  echo $e->getMessage();
  exit;
}

phpinfo();

?>

