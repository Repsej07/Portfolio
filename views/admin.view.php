<?php 
// Set the session cache expire time to 30 minutes
session_cache_expire(value: 30);

// Start the session
session_start();

// Check if the user is logged in by verifying session variables
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
    // Include the header file
    include "./views/inserts/header.php";
?>

<body>
<div class="dropdown-container">
    <div class="dropdown">
        <button class="dropbtn">Dropdown</button>
        <div class="dropdown-content">
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
            <a href="#">Link 3</a>
        </div>
    </div>
</div>
</body>
</html>

<?php 
    // Include the footer file
    include "./views/inserts/footer.php";
} else {
    // Display an error message if the user is not logged in
    echo "You are trying something that is not allowed";
    exit();
}
?>