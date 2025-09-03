<?php 
require_once 'controller/HomeController.php';
require_once 'controller/DetailsController.php';
require_once 'controller/TypeController.php';

if (!isset($_GET['url']) || empty($_GET['url'])) { //Si pas d'url = go home
    $url[] = 'home';
} else {
    $url = explode("/", $_GET['url']);
}

switch ($url[0]) {
    case 'home':
        $controller = new HomeController();
        $controller->index();
        break;
    case 'details':
        $pokemonId = $url[1];
        $controller = new DetailsController();
        $controller->show($pokemonId);
        break;
    case 'type':
        $pokemonType = $url[1];
        $controller = new TypeController();
        $controller->trie($pokemonType);
        break;
}

?>