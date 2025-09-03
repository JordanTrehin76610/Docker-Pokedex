<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokedex</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>


<body>

    <div class="container text-center mb-2">
        <p class="fs-1">Trie par type de pokémon</p>
        <a href="index.php?url=type/Plante" class="btn btn-primary">Plante</a>
        <a href="index.php?url=type/Feu" class="btn btn-primary">Feu</a>
        <a href="index.php?url=type/Eau" class="btn btn-primary">Eau</a>
        <a href="index.php?url=type/Insecte" class="btn btn-primary">Insecte</a>
        <a href="index.php?url=type/Normal" class="btn btn-primary">Normal</a>
        <a href="index.php?url=type/Poison" class="btn btn-primary">Poison</a>
        <a href="index.php?url=type/Électrik" class="btn btn-primary">Électrik</a>
        <a href="index.php?url=type/Sol" class="btn btn-primary">Sol</a>
        <a href="index.php?url=type/Fée" class="btn btn-primary">Fée</a>
        <a href="index.php?url=type/Vol" class="btn btn-primary">Vol</a>
        <a href="index.php?url=type/Spectre" class="btn btn-primary">Spectre</a>
        <!-- <a href="index.php?url=type/Ténèbre" class="btn btn-primary">Ténèbre</a> LES POKE TENEBRE NE SONT QUA PARTIR DE 2EME GEN-->
        <a href="index.php?url=type/Acier" class="btn btn-primary">Acier</a>
        <a href="index.php?url=type/Roche" class="btn btn-primary">Roche</a>
        <a href="index.php?url=type/Combat" class="btn btn-primary">Combat</a>
        <a href="index.php?url=type/Psy" class="btn btn-primary">Psy</a>
        <a href="index.php?url=type/Glace" class="btn btn-primary">Glace</a>
        <a href="index.php?url=type/Dragon" class="btn btn-primary">Dragon</a>
    </div>

    <div class="container text-center">
        <div class="row">
            <?php foreach ($allPokemons as $pokemon) { ?>
            <div class="col-4 border">
                <a href="index.php?url=details/<?= $pokemon['id'] ?>">
                    <div class="row">
                        <div class="col">
                            <p><?= $pokemon['nom'] ?></p>
                        </div>
                        <div class="col">
                            <p><?= $pokemon['id'] ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <img src="<?= $pokemon['image'] ?>" alt="Image du pokémon" class="w-50">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p><?= $pokemon['type'][0] ?></p>
                        </div>
                        <?php if (isset($pokemon['type'][1])) { ?>
                        <div class="col">
                            <p><?= $pokemon['type'][1] ?></p>
                        </div>
                        <?php } ?>
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