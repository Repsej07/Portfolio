<?php
include "./views/inserts/header.php";
$home_image = $result[0]['home_image'];
$title = $result[0]['page_name'];
$Skill1 = "HTML5";
$Skill2 = "CSS";
$Skill3 = "JavaScript";
$Skill4 = "PHP";
$Skill5 = "Adobe";
$Skill6 = "Retail";
$Skill7 = "MySQL";
$Block1 = "views/assets/Jesper/blocks/Project.1.block.png";
$Block2 = "views/assets/Jesper/blocks/Project.2.block.png";
$Block3 = "views/assets/Jesper/blocks/Project.3.block.png";
$Block4 = "views/assets/Jesper/blocks/Project.4.block.png";
print_r($result);

$blocks = explode('|', $result[0]['blocks']);
$skills = explode('|', $result[0]['skills']);
foreach ($blocks as $block) {
    echo "$block<br>";
}
foreach ($skills as $skill) {
    echo "$skill<br>";
}

?>
<html>

<head>
    <title><?php echo $title ?></title>
</head>

<body>
    <div class="home-container">
        <h1 class="title">Creating and selling Content</h1>
        <div class="main-image">
            <img class="main-image-img" src="<?=$home_image?>" alt="main-image">
        </div>
        <div class="skill-bar">
            <!-- <span class="skill1"><?php echo $Skill1 ?></span>
            <span class="skill"><?php echo $Skill2 ?></span>
            <span class="skill"><?php echo $Skill3 ?></span>
            <span class="skill"><?php echo $Skill4 ?></span>
            <span class="skill"><?php echo $Skill5 ?></span>
            <span class="skill"><?php echo $Skill6 ?></span>
            <span class="skill"><?php echo $Skill7 ?></span> -->
            <?php
            foreach ($skills as $index => $skill) {
                echo "<span class='skill".($index + 1)."'>".$skill."</span>";
            }
            ?>
        </div>



    </div>
    <div class="block-grid">
        <?php
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