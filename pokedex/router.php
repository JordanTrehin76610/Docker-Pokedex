<?php 
require_once 'controller/HomeController.php';
require_once 'controller/DetailsController.php';
require_once 'controller/TypeController.php';
require_once 'controller/GenController.php';
require_once 'controller/NameController.php';

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
        if (!is_numeric($pokemonId) || $pokemonId <= 0 || $pokemonId >= 251) {
            header("Location: erreur.php"); // Redirection si l'id n'est pas un nombre ou est négatif ou supérieur au nombre de pokémon
            exit;
        } else {
            $controller = new DetailsController();
            $controller->show($pokemonId);
        }
        break;
    case 'type':
        $pokemonType = $url[1];
        if (!in_array($pokemonType, ['Normal', 'Feu', 'Eau', 'Plante', 'Électrik', 'Glace', 'Combat', 'Poison', 'Sol', 'Vol', 'Psychique', 'Insecte', 'Roche', 'Spectre', 'Dragon', 'Fée', 'Acier', 'Ténèbre', 'Psy'])) {
            header("Location: erreur.php");
            exit;
        } else {
            $controller = new TypeController();
            $controller->trie($pokemonType);
        }
        break;
    case "gen":
        $pokemonGen = $url[1];
        if (!in_array($pokemonGen, ['1', '2', '3', '4', '5', '6', '7', '8', '9'])) {
            header("Location: erreur.php");
            exit;
        } else {
            $controller = new GenController();
            $controller->range($pokemonGen);
        }
        break;
    case "prenom":
        $pokemonName = $url[1];
        if (empty($pokemonName) || $pokemonName == '') {
            header("Location: erreur.php");
            exit;
        } else {
            $controller = new NameController();
            $controller->appel($pokemonName);
        }
}

?>