<?php
$username = "root";
// $name = "block1";
get_images($username);
function get_images($username) {
    try {
        $db = new PDO("mysql:host=localhost;dbname=Portfolio", $username, 'Hi123');
        $stmt = $db->prepare("SELECT directory FROM images WHERE name = :name");
        $name = "block1";
        $stmt->bindParam(':name', $name);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);    
        echo $result[0]['directory'];
        return $result;
    } 
    catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}