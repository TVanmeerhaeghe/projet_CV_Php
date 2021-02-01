<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Coiffeur</title>
	</head>

<body>

<?php
	if( isset($_POST["envoie"]) ){

		$Coiffeur = $_POST['user_coif'];

		$db = new PDO('mysql:host=exmachinefmci.mysql.db;dbname=exmachinefmci;charset=utf8', 'exmachinefmci', 'carp310M');

		$result = $db->prepare('INSERT INTO CoiffeurVanmeerhaeghe (coiffeur) VALUES(:coiffeur)');

		$result->execute(array('coiffeur' => $coiffeur ));

	}

?>

	<h1>Liste des coiffeurs</h1>

	<form action="#" method="post" name="coif">
		<div>
				<label for="name" >Tapez le nom de votre coiffeur</label>
				<input type="text" name="user_coif" placeholder="Taper le nom de votre coiffeur" autofocus="">
		</div>
		
		<div id="button">
				<button type="submit" name="envoie">Submit</button>
		</div>

	</form>
			
</body>