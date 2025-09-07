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

    <h1 class="my-5 text-center">Quel est ce pokémon ?</h1>

    <div class="container text-center">
        <?php $pokemon = $idPokemons[0]; ?>
        <?php require __DIR__ . "/../style/style.php"; ?>
        <div class="row">
            <div class="col border-end">
                <img src="<?= $pokemon['image'] ?>" alt="Image du pokémon" class="pokemonDetail">
            </div>
            <div class="col">
                <div class="row">
                    <div class="col">
                        <p class="fs-1"><?= $pokemon['nom'] ?></p>
                    </div>
                    <div class="col">
                        <p class="fs-1">N°<?= $pokemon['id'] ?></p>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col">
                        <p class="fs-2">Génération: <?= $pokemon['gen'] ?></p>
                    </div>
                    <div class="col">
                        <p class="fs-1"></p>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col">
                        <img src="<?= $icone0 ?>" alt="Logo du 1er type du pokémon" class="typeDetail">
                    </div>
                    <div class="col">
                        <img src="<?= $icone1 ?>" alt="Logo du 2ème type du pokémon" class="typeDetail">
                    </div>
                </div>
                <div class="row mt-5">
                    <p class="fs-3"><?= $pokemon['description'] ?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="container text-center mt-3">
        <a href="index.php" class="btn btn-primary">Retour à la liste des Pokémon</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>




</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
</script>
</body>




</html>