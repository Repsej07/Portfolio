<?php 
session_cache_expire(value: 30);
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
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
</html>
<?php 
include "./views/inserts/footer.php";
}else{
     echo"u are trying something that is not allowed";
     exit();
}
 ?>