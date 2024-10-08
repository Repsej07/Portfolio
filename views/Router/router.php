<?php
include './views/Controllers/AboutController.php';
include './views/Controllers/ContactController.php';
include './views/Controllers/404Controller.php';
include './views/Controllers/HomeController.php';
include './views/Controllers/ProjectController.php';
include './views/Controllers/controller.php';
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($page) {
    case 'about':
        $controller = new AboutController();
        $controller->index("/about");
        break;
    case 'contact':
        $controller = new ContactController();
        $controller->index("/contact");
        break;
    case 'projects':
        $controller = new ProjectController();
        $controller->index("/projects");
        break;
    case 'home':
    case 'index':
        $controller = new HomeController();
        $controller->index("/home");
        break;
    default:
        $controller = new ErrorController();
        $controller->index("/404");
        break;
}