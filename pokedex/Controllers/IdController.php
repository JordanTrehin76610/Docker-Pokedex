<?php 
namespace Controllers;

use Models\PokemonModel;

class IdController
{
    
    private PokemonModel $model;
    
    public function getById(int $id) {
        require_once __DIR__ . "/../style/style.php";
        $this->model = new PokemonModel();
        $allPokemons = $this->model->getById($id);
        require_once __DIR__ . "/../views/home.php";
    }

}

?>