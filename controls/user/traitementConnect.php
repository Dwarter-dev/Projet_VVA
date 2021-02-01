<?php
	include('../../fonctions/user.php');
  /*On défini les valeurs*/
	$user = $_POST['pseudo']; // 'pseudo' est dans la form et $user est la valeur qu'on lui attribut
	$mdp = $_POST['mdp'];     // idem pour 'mdp'
	/*echo $user; // Renvoie/affiche l'utilisateur pour vérifier que la BDD marche
	echo $mdp;*/
	/*Vérifie si l'utilisateur et le mdp sont présent ou non*/
	if(!empty($user) && !empty($mdp)) {
		if(getUser($user, $mdp)) {
			header('Location: ../../index.php?page=accueil');
		} else {
			echo "la connexion a échouée.";
			echo "<html></br> <a href='../../index.php?page=accueil'>Retour à Connexion</a><html>";
		}
	} else {
		echo "Le nom d'utilisateur et/ou le mot de passe sont vides";
		echo "<a href='../../index.php?page=accueil'>Retour à Connexion</a>";
	}
