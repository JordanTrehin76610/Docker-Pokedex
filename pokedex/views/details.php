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
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <p><?= $idPokemons[0]['nom'] ?></p>
                        </div>
                        <div class="col">
                            <p><?= $idPokemons[0]['id'] ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <img src="<?= $idPokemons[0]['image'] ?>" alt="Image du pokémon" class="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p><?= $idPokemons[0]['type'][0] ?></p>
                        </div>
                        <?php if (isset($idPokemons[0]['type'][1])) { ?>
                        <div class="col">
                            <p><?= $idPokemons[0]['type'][1] ?></p>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p><?= $idPokemons[0]['description'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container text-center">
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