<?php
include_once("views/inserts/Header.php");
?>
<html>
<head>
    <title>Project Adjustments</title>
</head>
<body>
    <form action="/admin/Project_adjustments" method="POST">
        <textarea rows="1" cols="50" class="admin-textarea" name="name" id="project_adjustments_name"><?=$content_array[0][0]['project_name']?></textarea>
        <textarea rows="2" cols="50" class="admin-textarea" name="sub_image" id="project_adjustments_sub_image"><?=$content_array[0][0]['sub_image']?></textarea>
        <textarea rows="2" cols="50" class="admin-textarea" name="main_image" id="project_adjustments_main_image"><?=$content_array[0][0]['main_image']?></textarea>
        <?php
        foreach ($content_array[0] as $content) {

            echo "<textarea rows='1' cols='50' class='admin-textarea' name='article_header' type='text'>".$content['article_header']."</textarea>";
            echo "<textarea rows='8' cols='50' class='admin-textarea' name='article_content' type='text'>".$content['article_content']."</textarea>";
        }
        ?>
         <button type="submit">Submit</button>





 



    </form>
</body>
</html>
<?php
include_once("views/inserts/Footer.php");
?>