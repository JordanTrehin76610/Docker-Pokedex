<?php 

class DetailsController
{
    
    private PokemonModel $model;
    
    public function show(int $id) {
        require_once __DIR__ . "/../models/PokemonModel.php";
        $this->model = new PokemonModel();
        $idPokemons = $this->model->getById($id); // On utilise le modèle, la variable ne sera utilisé que dans la vue
        require_once __DIR__ . "/../views/details.php";   // On envoie ça à une vue
    }

}

?>