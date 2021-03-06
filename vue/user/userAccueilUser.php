<?php
if (empty($_SESSION))
{
	header("Location: index.php?page=accueil");
	exit();
}
?>
<nav class="navbar navbar-expand-lg navbar-dark navbar-light" style="background-color: #398ac7"> <!-- Base physique de la page d'accueil-->
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		<div class="navbar-nav">
			<a class="nav-item nav-link" href="#">Village Vacances Alpes </a>
			<a class="nav-item nav-link" href="index.php?page=userProfilUser">Profil</a>
			<a class="nav-item nav-link" href="index.php?page=consulterActivite">Consulter une Activite</a>
			<a class="nav-item nav-link" href="index.php?page=mesInscriptions">Liste de mes inscriptions</a>
			<a class="nav-item nav-link" href="index.php?page=deconnexion">Déconnexion</a>
		</div>
</nav>

<table summary border="1">
    <tr>
      <th>Pseudo</th>
      <th>Nom</th>
      <th>Prénom</th>
      <th>Date d'inscription</th>
      <th>Type de Profil</th>
      <th>Date du début de séjour</th>
      <th>Date de fin de séjour</th>
      <th>Date de Naissance</th>
      <th>Adresse mail</th>
      <th>Numéro de Téléphone</th>
    </tr>
    <tr>
      <th><?=$_SESSION['USER']?></th>
      <th><?= $_SESSION['NOMCOMPTE'] ?></th>
      <th><?= $_SESSION['PRENOMCOMPTE'] ?></th>
      <th><?= $_SESSION['DATEINSCRIP']  ?></th>
      <th><?= $_SESSION['TYPEPROFIL'] ?></th>
      <th><?= $_SESSION['DATEDEBSEJOUR'] ?></th>
      <th><?= $_SESSION['DATEFINSEJOUR'] ?></th>
      <th><?= $_SESSION['DATENAISCOMPTE']  ?></th>
      <th><?= $_SESSION['ADRMAILCOMPTE']  ?></th>
      <th><?= $_SESSION['NOTELCOMPTE']  ?></th>
    </tr>
