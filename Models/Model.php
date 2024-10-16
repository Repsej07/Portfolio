<?php
$username = "root";
get_images($username);
function get_images($username) {
    try {
        $db = new PDO("mysql:host=localhost;dbname=Portfolio", $username, 'Hi123');
        $stmt = $db->prepare("SELECT directory FROM images WHERE view = :view");
        $view = "home";
        $stmt->bindParam(':view', $view);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);  
        foreach ($result as $row) {
            echo '<img src="' . $row['directory'] . '" alt="image" style="width:100%">';
        }
        return $result;
    } 
    catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}