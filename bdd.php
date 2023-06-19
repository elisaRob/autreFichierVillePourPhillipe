<?php

function connexionBDD(){
	$host = "localhost";
	$db_name = "u903846636_villeDeFrance";
	$username = "u903846636_elisaRobert";
	$password = "motDePasse1234!";
	$connexion = False;

    if(!$connexion){
		try{
			$bddPDO = new PDO('mysql:host='.$host.';dbname='.$db_name.'', $username, $password);
			$bddPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $bddPDO;
			
		}
		catch(PDOException $exception){
			echo "Erreur de connexion: ".$exception->getMessage();
		}
	}
	
}