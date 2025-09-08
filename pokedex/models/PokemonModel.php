<?php 
namespace Models;

class PokemonModel
{

    private string $file = __DIR__ . '/../data/pokemons.json';

    public function getAll() { //Obtenir tout les pokemons
        $json = file_get_contents($this->file);
        return json_decode($json, true);
    }

    public function getById(int $id) { //Trie les pokémons par id
        $json = file_get_contents($this->file);
        $pokedex = json_decode($json, true);
        foreach ($pokedex as $pokemon){

            if (strstr($pokemon['id'], $id)){

                $filtered[] = $pokemon;

            }

        }
        return $filtered;
    }


    public function getByType(string $type) { //Trie les pokémons par type
        $json = file_get_contents($this->file);
        $pokedex = json_decode($json, true);
        foreach ($pokedex as $pokemon){

            if (in_array($type, $pokemon['type'])) {
                $filtered[] = $pokemon;
            }

        }
        return $filtered;
    }

    public function getByGen(int $gen) { //Trie les pokémons par génération
        $json = file_get_contents($this->file);
        $pokedex = json_decode($json, true);
        foreach ($pokedex as $pokemon){

            if ($pokemon['gen'] == $gen){

                $filtered[] = $pokemon;

            }

        }
        return $filtered;
    }

    public function getByName(string $name) {
        $json = file_get_contents($this->file);
        $pokedex = json_decode($json, true);
        foreach ($pokedex as $pokemon){

            if (strstr($pokemon['nom'],  $name)){ //Equivalent à IS LIKE en PHP

                $filtered[] = $pokemon;

            }

        }

        if (empty($filtered)) {

            header("Location: pasPoke.php");
            exit;

        } else {

        return $filtered;

        }
    }
}

?>