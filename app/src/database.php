<?php

$host = "database";
$database = "contacts_app";
$user = "root";
$password = "root";

try {
  $conn = new PDO("mysql:host=$host;dbname=$database", $user, $password);
  // foreach ($conn->query("SHOW DATABASES") as $row) {
  //   print_r($row);
  // }
  // die();
} catch (PDOException $e) {
  die("PDO Connection Error: " . $e->getMessage());
}
