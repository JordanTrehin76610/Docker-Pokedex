<?php 

class NameController
{
    
    private PokemonModel $model;
    
    public function appel(string $name) {
        require_once __DIR__ . "/../models/PokemonModel.php";
        require_once __DIR__ . "/../style/style.php";
        $this->model = new PokemonModel();
        $namePokemons = $this->model->getByName($name); // On utilise le modèle, la variable ne sera utilisé que dans la vue
        require_once __DIR__ . "/../views/name.php";   // On envoie ça à une vue
    }

}

?>