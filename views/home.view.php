<?php
include "./views/inserts/header.php";
$person_image = "views/assets/Project-assets/Jesper.image.png";
$title = "Home";
$Skill1 = "HTML5";
$Skill2 = "CSS";
$Skill3 = "JavaScript";
$Skill4 = "PHP";
$Skill5 = "Adobe";
$Skill6 = "Retail";
$Skill7 = "MySQL";
$Block1 = "views/assets/blocks/Sony-block.png";
$Block2 = "views/assets/blocks/Mediamarkt-block.png";
$Block3 = "views/assets/blocks/Code-block.png";
$Block4 = "views/assets/blocks/BMD-block.png";
$Contact = "views/assets/blocks/Contact-block.svg";
// $Block1.href = "/project";
?>
<html>

<head>
    <title><?php echo $title ?></title>
</head>

<body>
    <div class="home-container">
        <h1 class="title">Creating and selling Content</h1>
        <div class="main-image">
            <img class="main-image-img" src="<?php echo $person_image ?>" alt="main-image">
        </div>
        <div class="skill-bar">
            <span class="skill1"><?php echo $Skill1 ?></span>
            <span class="skill"><?php echo $Skill2 ?></span>
            <span class="skill"><?php echo $Skill3 ?></span>
            <span class="skill"><?php echo $Skill4 ?></span>
            <span class="skill"><?php echo $Skill5 ?></span>
            <span class="skill"><?php echo $Skill6 ?></span>
            <span class="skill"><?php echo $Skill7 ?></span>
        </div>



    </div>
    <div class="block-grid">
        <div class="block-1" onclick="block1('/project/sony')"style="background-image: url(<?php echo $Block1 ?>);"></div>
        <div class="block-2" style="background-image: url(<?php echo $Block2 ?>);"></div>
        <div class="block-3" style="background-image: url(<?php echo $Block3 ?>)"></div>
        <div class="block-4" style="background-image: url(<?php echo $Block4 ?>)"></div>
        <div class="contact-block" style="background-image:url(<?php echo $Contact ?>)">
            <p class="contact-block-item">Curious?</p>

            <a class="contact-block-item-2" href="/contact">Contact</a>
        </div>
    </div>
</body>
<?php
include "./views/inserts/footer.php"; ?>

</html>