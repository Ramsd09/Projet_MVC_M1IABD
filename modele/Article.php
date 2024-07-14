<?php

	class Article
	{
		public $id;
		public $titre;
		public $contenu;
		public $categorie;
		public $dateCreation;
		public $dateModification;

		
		public static function getList()
		{
			$bd = Connexion::getConnexion();
			$data = $bd->query('SELECT * FROM article');
			$articles = $data->fetchAll(PDO::FETCH_CLASS, 'article');
			$data->closeCursor();
			return $articles;
		}

		public static function getArticle($id)
		{
			$bd = Connexion::getConnexion();
			$data = $bd->query('SELECT * FROM article WHERE id = '.$id);
			$articles = $data->fetch(PDO::FETCH_OBJ);
			$data->closeCursor();
			return $articles; 
		}

		public static function getCategoryId($id)
		{
			$bd = Connexion::getConnexion();
			$data = $bd->query('SELECT * FROM article WHERE categorie = '.$id);
			$articles = $data->fetchAll(PDO::FETCH_CLASS, 'article');
			$data->closeCursor();
			return $articles;
		}
	}
?>