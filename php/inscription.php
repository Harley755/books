
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/style.css">
    <title>Books | Bibliothèque Virtuelle</title>
</head>
<body>
<?php
	 $_POST['username'] = htmlspecialchars($_POST['username']);
	 $_POST['passwords'] = htmlspecialchars($_POST['passwords']);
	 $_POST['email'] = htmlspecialchars($_POST['email']);

	 // Données du formulaire bien envoyées
	 if(isset($_POST['username']) AND isset($_POST['passwords']) AND  isset($_POST['email']))
	 {
		 // Champs non vide
		 if(!empty($_POST['username']) AND !empty($_POST['email']) AND !empty($_POST['passwords']) AND !empty($_POST['checkbox']))
		 {
			 // Mot de passe identique et email bien defini
			 if(preg_match("#^[a-z0-9._-]+@([a-z0-9._-]){2,}\.[a-z]{2,4}$#", $_POST['email']))
			 {
				 // On hashe le password de l'utilisateur
				 $_POST['passwords'] = password_hash($_POST['passwords'], PASSWORD_DEFAULT);
				 // Connexion a la base de donnée
				 try
				 {
					$bdd = new PDO('mysql:host=localhost;dbname=tp_connexion;charset=utf8', 'root', '');
				 }
				 catch (Exception $e)
				 {
					 die('Erreur : ' .$e->getMessage());
				 }
				 // Insertion des données dans la base
				 $req = $bdd->prepare('INSERT INTO users(username, email, passwords) VALUES (:username, :email, :passwords)');
				 $req->execute(array(
					 'username' => $_POST['username'],
					 'email' => $_POST['email'],
					 'passwords' => $_POST['passwords']
				 ));
				
				 include "../sign_In.html";
			 }   
			 else 
			 {
				 echo 'Identifiant incorrect ou mot de passe non identique';
			 }       
		 }
	 }
 ?>

</body>
</html>

