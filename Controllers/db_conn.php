
<?php

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "test_db";

$pdo = new PDO("mysql:host=localhost;dbname=jesper_portfolio", 'root', 'Hi123');


if (!$pdo) {
	echo "Connection failed!";
}
