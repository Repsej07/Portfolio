<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Users";

// Create connection
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
      } catch(PDOException $e) {
  }

