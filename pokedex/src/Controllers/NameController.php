<?php 
namespace App\Controllers;

use App\Models\PokemonModel;

class NameController
{
    
    private PokemonModel $model;
    
    public function appel(string $name) {
        require_once __DIR__ . "/../style/style.php";
        $this->model = new PokemonModel();
        $allPokemons = $this->model->getByName($name); // On utilise le modèle, la variable ne sera utilisé que dans la vue
        require_once __DIR__ . "/../views/home.php";   // On envoie ça à une vue
    }

}

?>