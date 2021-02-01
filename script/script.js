function coucou(){
	let prenom = "Teo";

	alert(`hello ${prenom}`);
	}

function majorite(){
	let age = window.prompt ("Votre age ?");

	if (age < 18)
		alert(`Vous êtes mineur`);

	else
		alert(`Vous êtes majeur`);
}

function form(){
	 var formdeux = document.forms["contact"]["user_message"].value;

	alert(formdeux)

}

function good(){
	var complet = document.forms["contact"]["user_message"].value;

		if (complet == null || complet == ""){
			alert("Vous n'avez pas remplit le champ message");
		
		return false;
		}
				
}

/*coucou()
majorite()
coucou()*/

