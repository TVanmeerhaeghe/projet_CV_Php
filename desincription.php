<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Contact</title>
		<link rel="stylesheet" type="text/css" href="style/contact.css">
		<script type="text/javascript" src="script/script.js"></script>
	</head>

<body>
	
	<h1>Supression de vos donées</h1>

<?php

	if ($_GET['email']) {
		$adresseMail = $_GET['email'];

		$db = new PDO('mysql:host=exmachinefmci.mysql.db;dbname=exmachinefmci;charset=utf8', 'exmachinefmci', 'carp310M');

		$selectall = $db->query('SELECT * FROM mailTVanmeerhaeghe WHERE mail="'.$adresseMail.'"')
		$result = $selectall->fetch();
		$countable = (count($result));

		if($countable >=1){
			$delete = $db->prepare('DELETE FROM mailTVanmeerhaeghe WHERE mail="'.$adresseMail.'"' )
			$delete->execute();
		}

		echo "Vous &ecirc;tes bien desabonne&eacute; de notre liste de diffusion";
	}
?>



</body>