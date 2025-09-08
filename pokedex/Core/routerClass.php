<?php

use Controllers\HomeController;
use Controllers\DetailsController;
use Controllers\TypeController;
use Controllers\GenController;
use Controllers\NameController;
use Controllers\IdController;


class Router {
    private $routes = []; // ici on stocke toutes les pages

    // ajouter une page
    public function addRoute($url, $function) {
        $this->routes[$url] = $function;
    }

    // exécuter la bonne page
    public function run($urlParam) {
        $urlParts = explode('/', $urlParam ?? '');

        $path = $urlParts[0] ?? 'home'; //On créer Path
        $param = $urlParts[1] ?? null;

        if (isset($this->routes[$path])) {
            // Appelle la fonction de la route et passe le paramètre si nécessaire avec Path
            $callback = $this->routes[$path];
            $callback($param);
        } else {
            header("Location: erreur.php");
            exit;
        }
    }
}


// Création du router
$router = new Router();

// Définition des routes
$router->addRoute("home", function() { //Du coup "home" c'est le path
    $controller = new HomeController();
    $controller->index();
});

$router->addRoute("details", function($id) {
    if (!is_numeric($id) && $id <= 0 && $id >= 1025 && $id >= 4000 && $id <= 4100 && $id >= 6000 && $id <= 6100 && $id >= 7000 && $id <= 7200) {
        header("Location: erreur.php");
        exit;
    }
    $controller = new DetailsController();
    $controller->show($id);
});

$router->addRoute("type", function($type) {
    $validTypes = ['Normal', 'Feu', 'Eau', 'Plante', 'Électrik', 'Glace', 'Combat', 'Poison', 'Sol', 'Vol', 'Psychique', 'Insecte', 'Roche', 'Spectre', 'Dragon', 'Fée', 'Acier', 'Ténèbre', 'Psy'];
    if (!in_array($type, $validTypes)) {
        header("Location: erreur.php");
        exit;
    }
    $controller = new TypeController();
    $controller->trie($type);
});


$router->addRoute("gen", function($gen) {
    $validGens = ['1', '2', '3', '4', '5', '6', '7', '8', '9'];
    if (!in_array($gen, $validGens)) {
        header("Location: erreur.php");
        exit;
    }
    $controller = new GenController();
    $controller->range($gen);
});

$router->addRoute("prenom", function($name) {
    if (empty($name) || $name == '') {
        header("Location: erreur.php");
        exit;
    }
    $controller = new NameController();
    $controller->appel($name);
});

$router->addRoute("id", function($id) {
    if (!is_numeric($id) && $id <= 0 && $id >= 1025 && $id >= 4000 && $id <= 4100 && $id >= 6000 && $id <= 6100 && $id >= 7000 && $id <= 7200) {
        header("Location: erreur.php");
        exit;
    }
    $controller = new IdController();
    $controller->getById($id);
});
?>