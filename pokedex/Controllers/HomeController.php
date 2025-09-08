<?php 
namespace Controllers;

use Models\PokemonModel;

class HomeController
{

    private PokemonModel $model;

    public function index() {
        $this->model = new PokemonModel();
        $allPokemons = $this->model->getAll(); // On utilise le modèle, la variable ne sera utilisé que dans la vue
        require_once __DIR__ . '/../views/home.php';   // On envoie ça à une vue
    }

}

?>