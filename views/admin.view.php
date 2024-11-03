<?php 
session_cache_expire(value: 30);
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
echo "Hello, ".$_SESSION['user_name'];
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
</body>
</html>

<?php 
}else{
     echo"u are trying something that is not allowed";
     exit();
}
 ?>