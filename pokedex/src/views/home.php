<?php

// var_dump($_POST['type']);


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if ($_POST['type'] != 'Tous') {
        $redirection = 'index.php?url=type/' . $_POST["type"];
        header("Location: $redirection");
        exit;
    }

    if($_POST['generation'] != 'Toutes') {
        $redirection = 'index.php?url=gen/' . $_POST["generation"];
        header("Location: $redirection");
        exit;
    }

    if(!empty($_POST['prenom'])) {
        $redirection = 'index.php?url=prenom/' . ucfirst($_POST["prenom"]);
        header("Location: $redirection");
        exit;
    }

    if(!empty($_POST['id'])) {
        $redirection = 'index.php?url=id/' . $_POST["id"];
        header("Location: $redirection");
        exit;
    }
}

$_POST['type'] = 'Tous';
$_POST['generation'] = 'Toutes';

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokédex</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style.css">
</head>


<body class="police">

    <h1 class="mt-3 text-center">Pokédex</h1>
    <p class="fs-3 text-center">Trie par type de pokémon</p>
    <p class="fs-5 mb-3 text-center">Qu'un seul type de recherche à la fois !</p>

    <form action="" method="post">
        <div class="container text-center mb-3">
            <div class="row">
                <div class="col text-start">
                    <label for="type">Type du pokémon:</label>
                    <select id="type" name="type" class="form-control mt-2">
                        <option value="Tous">Tous</option>
                        <option value="Plante">Plante</option>
                        <option value="Feu">Feu</option>
                        <option value="Eau">Eau</option>
                        <option value="Insecte">Insecte</option>
                        <option value="Normal">Normal</option>
                        <option value="Poison">Poison</option>
                        <option value="Électrik">Électrik</option>
                        <option value="Sol">Sol</option>
                        <option value="Fée">Fée</option>
                        <option value="Vol">Vol</option>
                        <option value="Spectre">Spectre</option>
                        <option value="Ténèbre">Ténèbre</option>
                        <option value="Acier">Acier</option>
                        <option value="Roche">Roche</option>
                        <option value="Combat">Combat</option>
                        <option value="Psy">Psy</option>
                        <option value="Glace">Glace</option>
                        <option value="Dragon">Dragon</option>
                    </select>
                </div>
                <div class="col text-start">
                    <label for="generation">Génération du pokémon:</label>
                    <select id="generation" name="generation" class="form-control mt-2">
                        <option value="Toutes">Toutes</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                    </select>
                </div>
                <div class="col text-start">
                    <label for="id">ID du pokémon:</label>
                    <input type="number" class="form-control mt-2" id="id" name="id" placeholder="">
                </div>
                <div class="col text-start">
                    <label for="prenom">Nom du pokémon:</label>
                    <input type="text" class="form-control mt-2" id="prenom" name="prenom" placeholder="">
                </div>
                <div class="col mt-2">
                    <button type="submit" class="btn btn-primary mt-4">Rechercher</button>
                </div>
                <div class="col mt-2">
                    <a href="index.php" class="btn btn-primary mt-4">Ré-initialiser</a>
                </div>
            </div>
        </div>
    </form>

    <div class="container text-center mb-5">
        <div class="row">
            <?php foreach ($allPokemons as $pokemon) { ?>
            <?php require __DIR__ . "/../style/style.php"; ?>
            <div class="col-4 border border-dark <?= $color ?> ">
                <a href="index.php?url=details/<?= $pokemon['id'] ?>" class="text-decoration-none <?= $color ?>">
                    <div class="row">
                        <div class="col">
                            <p><?= $pokemon['nom'] ?></p>
                        </div>
                        <div class="col">
                            <p>N°<?= $pokemon['id'] ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <img src="<?= $pokemon['image'] ?>" alt="Image du pokémon" class="pokemonImage">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <img src="<?= $icone0 ?>" alt="Logo du 1er type du pokémon" class="type">
                        </div>
                        <div class="col">
                            <img src="<?= $icone1 ?>" alt="Logo du 2ème type du pokémon" class="type">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p><?= $pokemon['description'] ?></p>
                        </div>
                    </div>
                </a>
            </div>
            <?php } ?>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>




</html>