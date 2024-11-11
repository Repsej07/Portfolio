<?php
include_once("views/inserts/Header.php");
?>
<html>
<head>
    <title>Project Adjustments</title>
</head>
<body>
    <form action="/admin/Project_adjustments">
        <textarea name="name" id="project_adjustments_name"><?=$content_array[0][0]['project_name']?></textarea>









    </form>
</body>
</html>
<?php
include_once("views/inserts/Footer.php");
?>