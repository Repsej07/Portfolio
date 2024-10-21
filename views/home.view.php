<?php
include "./views/inserts/header.php";
$home_image = $result[0]['home_image'];
$title = $result[0]['page_name'];
?>
<html>

<head>
    <title><?=$result[0]['page_name']?></title>
</head>

<body>
    <div class="home-container">
        <h1 class="title"><?=$result[0]['title_line']?></h1>
        <div class="main-image">
            <img class="main-image-img" src="<?=$result[0]['home_image']?>" alt="main-image">
        </div>
        <div class="skill-bar">
            <?php
            $skills = explode('|', $result[0]['skills']);
            foreach ($skills as $index => $skill) {
                echo "<span class='skill'".($index + 1)."'>".$skill."</span>";
            }
            ?>
        </div>



    </div>
    <div class="block-grid">
        <?php
        $blocks = explode('|', $result[0]['blocks']);
        foreach ($blocks as $index => $block) {
            echo"<div class=block-".($index + 1)." ". "style=background-image:url($block)></div>";  
        }?>
        <div class="block-5" style="background-image:url('views/assets/Contact-block.svg')">
            <p class="block-5-item">Curious?</p>

            <a class="block-5-item-2" href="/contact">Contact</a>
        </div> 
    </div>
</body>
<?php
include "./views/inserts/footer.php"; ?>

</html>