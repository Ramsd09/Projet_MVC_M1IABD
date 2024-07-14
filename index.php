<?php
	require_once 'controleur/Controller.php';

	$controller = new Controller();

	if (!isset($_GET['action']))
	{
		$controller->Accueil();
	}
	else
	{
		if (strtolower($_GET['action']) === 'article')
		{
			if (isset($_GET['id']))
			{
				$controller->afficherArticle($_GET['id']);
			}
			else
			{
				$controller->ShowErrorPage();
			}
		}
		else if (strtolower($_GET['action']) === 'categorie')
		{
			if (isset($_GET['id']))
			{
				$controller->afficherCategorie($_GET['id']);
			}
			else
			{
				$controller->ShowErrorPage();
			}
		}
		else
		{
			$controller->Accueil();
		}
	}
?>