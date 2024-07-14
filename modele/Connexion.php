<?php
	
	class Connexion
	{
		public static function getConnexion()
		{
			try
			{
				$bd = new PDO('mysql:host=localhost;dbname=mglsi_news;charset=utf8', 'mglsi_user', 'passer');
			}
			catch (Exception $e)
			{
				echo "Erreur de connexion s: ".$e->getMessage();
				$bd = null;
			}
			
			return $bd;
		}
		
	}
?>