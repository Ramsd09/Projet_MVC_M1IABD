<?php

	require_once 'modele/Article.php';
	require_once 'modele/Categorie.php';
	require_once 'modele/Connexion.php';

	class Controller
	{
		
		public function Accueil()
		{
			$article = Article::getList();
			$categories = Categorie::getList();

			include 'vue/VueAccueil.php';
		}

		public function afficherArticle($id)
		{
			$article = Article::getArticle($id);
			$categories = Categorie::getList();
			
			include  'vue/VueArticle.php';
		}

		public function afficherCategorie($id)
		{
			$article = Article::getCategoryId($id);
			$categories = Categorie::getList();
			
			include 'vue/VueArticleCategorie.php';
		}
	}
?>