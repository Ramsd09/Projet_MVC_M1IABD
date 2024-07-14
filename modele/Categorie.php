<?php
	class Categorie
	{
		public $id;
		public $libelle;

	
		public static function getList()
		{
			$bd = Connexion::getConnexion();
			$data= $bd->query('SELECT * FROM categorie');
			$categories = $data->fetchAll(PDO::FETCH_CLASS, 'categorie');
			$data->closeCursor();
			return $categories;
		}

		public static function getCategorie($id)
		{
			$bd = Connexion::getConnexion();
			$data= $bd->query('SELECT * FROM categorie WHERE id = '.$id);
			$categories = $data->fetch(PDO::FETCH_OBJ);
			$data->closeCursor();
			return $categories;
		}
	}
?>