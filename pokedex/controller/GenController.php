<?php 

class GenController
{
    
    private PokemonModel $model;
    
    public function range(int $gen) {
        require_once __DIR__ . "/../models/PokemonModel.php";
        require_once __DIR__ . "/../style/style.php";
        $this->model = new PokemonModel();
        $genPokemons = $this->model->getByGen($gen); // On utilise le modèle, la variable ne sera utilisé que dans la vue
        require_once __DIR__ . "/../views/gen.php";   // On envoie ça à une vue
    }

}

?>