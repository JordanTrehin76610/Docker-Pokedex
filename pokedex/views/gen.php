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

    <div class="container text-center my-2">
        <a href="index.php" class="btn btn-primary">Retour à la liste des Pokémon</a>
    </div>


    <div class="container text-center">
        <div class="row">
            <?php foreach ($genPokemons as $pokemon) { ?>
            <!-- Influence la variable $color et le type -->
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