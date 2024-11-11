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
    <a href="#">Home page</a>
    <a href="#">Error Page</a>
    <a href="/admin/project_1">Project 1</a>
    <a href="#">Project 2</a>
    <a href="#">Project 3</a>
    <a href="#">Project 4</a>
  </div>
</div>
</div>
</html>
<?php 
include "./views/inserts/footer.php";
}else{
    header("Location: /login");
     exit();
}
 ?>