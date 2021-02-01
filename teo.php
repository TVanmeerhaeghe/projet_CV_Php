<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Contact</title>
		<link rel="stylesheet" type="text/css" href="style/contact.css">
		<script type="text/javascript" src="script/script.js"></script>
	</head>

<body class="card">
	<h1>Contact form</h1>

	<?php

	if( isset($_POST["envoie"]) ){
		if ($_POST["user_message"]=='' || !isset($_POST["user_message"]) ){

			echo '<script type="text/javascript">alert(\'Veuillez remplir le champ message svp.\')</script>';
			}

		else{
			mail('vanmeerhaegheteo@gmail.com','Reponse aux Form' , $_POST["user_message"]);

			echo '<script type="text/javascript">alert(\'Message envoyé avec succés !\')</script>';

			  if(isset($_POST["user_authorise"])){
                if (!isset($_POST['user_mail']) || $_POST['user_mail']=='')  {
                    $_POST['user_mail']="";
                }

                $adresseMail = $_POST['user_mail'];
                $message = $_POST['user_message'];
                $numero = $_POST ['user_phone'];
                $name = $_POST['user_name'];
                $civ = $_POST['user_civility'];
                $natio = $_POST['user_natio'];
                
                $db = new PDO('mysql:host=exmachinefmci.mysql.db;dbname=exmachinefmci;charset=utf8', 'exmachinefmci', 'carp310M');

                $result = $db->prepare('INSERT INTO mdsVanmeerhaeghe (mail, message, numero, name, civility, natio) VALUES(:adresseMail, :message, :numero, :name, :civility, :natio)');
                $result->execute(array('adresseMail' => $adresseMail , 'message' => $message , 'numero' => $numero , 'name' => $name , 'civility' => $civ , 'natio' => $natio ));
            	}
			}
		}

?>

<!-- onsubmit= "return good()" -->

		<form action="#" method="post" name="contact">
			<div>
				<label class="label" for="name" id="name">Your name</label>
				<input class="text" type="text" name="user_name" placeholder="Your name" autofocus="">
			</div>

			<div id="civility">
				<label class="label" for="Civility">Your are ?</label>
				Mr<input class="civ" type="radio" name="user_civility" value="MR">
				Ms<input class="civ" type="radio" name="user_civility" value="MS">
				Other<input class="civ" type="radio" name="user_civility" value="OTH">
			</div>

			<div>
				<label class="label" for="mail">Your mail</label>
				<input class="text" type="e-mail" name="user_mail" placeholder="Your mail adress">
			</div>

			<div>
				<label class="label" for="phone">Your phone number</label>
				<input class="text" type="number" name="user_phone" placeholder="Your phone Number">
			</div>

			<div id="natio">
				<label class="label" for="nationality">Your nationality ?</label>
				<select id="lity" name="user_natio">
					<option value="FR">French</option>
					<option value="UK">English</option>
					<option value="BE">Belgian</option>
				</select>
			</div>

			<div>
				<label class="label" for="msg">Your message</label>
				<textarea id="msg" class="text" name="user_message" placeholder="Your message"></textarea>
			</div>

			<div id="natio">
				<input type="checkbox" id="autho" name="user_authorise">
				<label for="form-autorisation"> I authorize the use of my personal informations</label>
			</div>

			<div id="button">
				<button type="submit" name="envoie">Submit</button>
			</div>

			<div id="back">
				<a href="index.html">Back to my resume</a>
			</div>
		</form>
			
	</body>

</html>