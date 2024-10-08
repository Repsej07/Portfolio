<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="views/Css/styles.css">
    <script src="views/JavaScript/links.js"></script>
    <script src="views/JavaScript/buttons.js"></script>

</head>

<body>

    <div class="main-header">
        <div class="backdrop-header"></div>
        <div class="logo-container" onclick="homelink()">
            <span class="fName-logo">Jesper</span>
            <span class="lName-logo">Meuzelaar</span>
        </div>
        <div onclick="openNav()"class="menu">
            <svg  width="30" height="30" viewBox="0 0 80 80" fill="white" xmlns="http://www.w3.org/2000/svg">
                <path id="menu" d="M10 40H70M10 20H70M10 60H70" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </div>
        
    </div>
    <div class="overlay" id="overlay" >
    <!-- <div id="svg-container" onclick="closenav()"class="svg-container"><svg class="close-button" width="60" height="60" viewBox="0 0 80 80" xmlns="http://www.w3.org/2000/svg">
            <path d="M21.3337 63.3334L16.667 58.6667L35.3337 40L16.667 21.3334L21.3337 16.6667L40.0003 35.3334L58.667 16.6667L63.3337 21.3334L44.667 40L63.3337 58.6667L58.667 63.3334L40.0003 44.6667L21.3337 63.3334Z" />
        </svg>
    </div> -->
    <div id="nav-bar" class="nav-bar">
        <a class="nav-item-1" href="views/main.view.php">Portfolio</a>
        <a class="nav-item-2" href="views/about.view.php">About</a>
        <a class="nav-item-3" href="views/contact.view.php">Contact</a>
        </div>
        </div>

  
</body>

</html>