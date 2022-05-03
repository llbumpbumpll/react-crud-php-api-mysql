<?php
$servername = "a6.cpe231.cpe.kmutt.ac.th:8090";
$username = "a6_rosehat";
$password = "a6_rosehat_kass";
$dbname = "a6_thanfuns";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>