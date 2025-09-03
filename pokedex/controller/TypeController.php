<?php 

class TypeController
{
    
    private PokemonModel $model;
    
    public function trie(string $type) {
        require_once __DIR__ . "/../models/PokemonModel.php";
        $this->model = new PokemonModel();
        $typePokemons = $this->model->getByType($type); // On utilise le modèle, la variable ne sera utilisé que dans la vue
        require_once __DIR__ . "/../views/type.php";   // On envoie ça à une vue
    }

}

?>