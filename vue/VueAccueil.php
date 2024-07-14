<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Actualités</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body class="test">
	<?php include 'VueBanniere.php'; ?>
	<div id="contenu">
		<?php if (!empty($article)): ?>
			<?php foreach ($article as $article): ?>
				<div class="article">
					<h1 >
						<a class="apercu_article" href="index.php?action=article&id=<?= $article->id ?>">
							<?= $article->titre ?> </a>
					</h1>
					<a class="apercu_article" href="index.php?action=article&id=<?= $article->id ?>">
					<p><?= substr($article->contenu, 0, 270) . '...' ?></p>
					 </a>
				</div>
			<?php endforeach ?>
		<?php else: ?>
			<div class="message">Aucun article de cette catégorie pour l'instant !</div>
		<?php endif ?>

		
	</div>

</body>
</html>