<?php 
namespace App\Controllers;

use App\Models\PokemonModel;

class GenController
{
    
    private PokemonModel $model;
    
    public function range(int $gen) {
        require_once __DIR__ . "/../style/style.php";
        $this->model = new PokemonModel();
        $allPokemons = $this->model->getByGen($gen); // On utilise le modèle, la variable ne sera utilisé que dans la vue
        require_once __DIR__ . "/../views/home.php";   // On envoie ça à une vue
    }

}

?>