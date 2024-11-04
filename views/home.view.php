<?php
include "./views/inserts/header.php";
?>
<html>

<head>
    <title><?= $content_array[0]['title'] ?></title>
</head>

<body>
    <div class="home-container">
        <h1 class="title"><?= $content_array[0]['title_line'] ?></h1>

        <div class="main-image">
            <img class="main-image-img" src="<?= $content_array[0]['home_image'] ?>" alt="main-image">
        </div>
        <div class="skill-bar">
            <div class="skill-bar-inner">

                <?php
                $skills = explode('|', $content_array[0]['skills']);
                for ($i=0; $i < 2; $i++) { 
                    foreach ($skills as $skill) {
                        echo "<span class='skill'>" . htmlspecialchars($skill) . "</span>";
                    }
                }
                
                ?>
            </div>
        </div>



    </div>
    <div class="block-grid">
        <?php
        $blocks = explode('|', $content_array[0]['blocks']);
        foreach ($blocks as $index => $block) {
            $index = $index + 1;
            echo "<div id='block' class=block-" . ($index) . " " . "onclick='link($index)'" . "style=background-image:url($block)></div>";
        } ?>
        <div class="block-5" style="background-image:url('views/assets/Contact-block.svg')">
            <p class="block-5-item">Interested?</p>
            <a class="block-5-item-2" href="/contact">Contact</a>
        </div>
    </div>
    <script>
        document.addEventListener('scroll', () => {
            const skillBarInner = document.querySelector('.skill-bar-inner');
            const scrollY = window.scrollY;
            skillBarInner.style.transform = `translateX(${scrollY / 5}px)`;
        });
    </script>
    <!-- with help of gpt i have achieved the scroll effect for the skillsbar -->
    <!-- in a recent conversation with an AI assistant, it was suggested to implement a horizontal scrolling
      effect for a skill bar using JavaScript and CSS to create a visually appealing user experience
      (Assistant, personal communication, November 3, 2024). -->

</body>
<?php
include "./views/inserts/footer.php"; ?>

</html>