<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Affichage d'un article</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body class="test">
	<?php include 'VueBanniere.php'; ?>
	<?php if (!empty($article)): ?>
		<!-- <div id="contenu" class="contenu_article"> -->
		<div id="contenu">
			<div class="contenu_article">
				<h1><?= $article->titre ?></h1>
				<p><?= $article->contenu ?></p>
				<span class="date">Publié le <?= $article->dateCreation ?></span>
			</div>
		</div>
	<?php else: ?>
		<div class="message">Aucun article de cette catégorie pour l'instant !</div>
	<?php endif ?>
</body>
</html>