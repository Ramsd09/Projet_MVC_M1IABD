<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualités du Sénégal</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div id="entete">
        <h1>Actualités du Sénégal</h1>
    </div>

    <div class="menu">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-center"> <!-- Utilisation de la classe justify-content-center -->
            <!-- <a class="navbar-brand" href="#">Accueil</a> -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="index.php">Accueil <span class="sr-only">(current)</span></a>
                    <?php if (!empty($categories)): ?>
                        <?php foreach ($categories as $categorie): ?>
                            <a class="nav-item nav-link" href="index.php?action=categorie&id=<?= $categorie->id ?>"><?= $categorie->libelle ?></a>
                        <?php endforeach ?>
                    <?php else: ?>
                        <p>Aucune catégorie disponible</p>
                    <?php endif ?>
                </div>
            </div>
        </nav>
    </div>

    </body>
</html>
