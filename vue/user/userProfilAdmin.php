<?php
if ($_SESSION["TYPEPROFIL"] === 'VA')
{
	header("Location: index.php?page=userProfilUser");
	exit();
}
if (empty($_SESSION))
{
	header("Location: index.php?page=accueil");
	exit();
}
?>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
    <ul class="navbar-nav mr-auto">
			<a class="nav-item nav-link" href="index.php?page=accueil">Village Vacances Alpes </a>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" > Activités </a>
					<ul class="dropdown-menu">
						<li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Gestion des activités</a>
							<ul class="dropdown-menu">
								<?php
								if ($_SESSION["TYPEPROFIL"] === 'EN')
								{
									echo '<li><a class="dropdown-item" href="index.php?page=consulterActivite">Consulter les Activités</a></li>
												<li><a class="dropdown-item" href="index.php?page=creeActivite">Créer une Activité</a></li>';
								}
								else
								{
									echo '<li><a class="dropdown-item" href="index.php?page=consulterActivite">Consulter les Activités</a></li>';
								}
								?>
							 </ul>
						</li>
						<li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Gestion des inscriptions</a>
							<ul class="dropdown-menu">
								<?php
								if ($_SESSION["TYPEPROFIL"] === 'EN')
								{
									echo '<li><a class="dropdown-item" href="index.php?page=mesInscriptions">Liste de mes inscriptions</a></li>
												<li><a class="dropdown-item" href="index.php?page=vueInscription">Liste de tout les inscrits</a></li>';
								}
								else
								{
									echo '<li><a class="dropdown-item" href="index.php?page=mesInscriptions">Liste de mes inscriptions</a></li>';
								}
								?>
							</ul>
						</li>
					</ul>
		 </li>
		 <li class="nav-item dropdown">
			 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"> Animations </a>
			 <ul class="dropdown-menu">
				 <li><a class="dropdown-item" href="index.php?page=creeAnimation">Créer une Animation</a></li>
				 <li><a class="dropdown-item" href="index.php?page=consulterAnimation">Consulter une Animation</a></li>
			 </ul>
		 </li>
		<a class="nav-item nav-link" href="index.php?page=deconnexion">Déconnexion</a>
		</ul>
	</div>
	<div class="mx-auto order-0">
		<a class="navbar-brand mx-auto" href="#">Profil</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
			<span class="navbar-toggler-icon"></span>
		</button>
	</div>
	<div class="navbar-collapse collapse w-100 order-3">
  	<ul class="navbar-nav ml-auto">
      <li class="nav-item">
          <a class="nav-link">Bonjour <?=$_SESSION['NOMCOMPTE']?> !</a>
      </li>
    </ul>
  </div>
</nav>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<h2>Voici le profil de <?=$_SESSION['USER']?> </h2>
	﻿    <div> Quelques informations sur vous : </div>
	    ﻿<ul>
				<li>Votre nom complet est : <?= $_SESSION['NOMCOMPTE'] . $_SESSION['PRENOMCOMPTE'] ?></li>
	    ﻿  <li>Votre date d'inscription est le : <?= $_SESSION['DATEINSCRIP'] ?></li>
			 	<li>Votre type de profil est : <?php
				if ($_SESSION["TYPEPROFIL"] === 'EN')
				{
					echo 'Encadrant';
				}?>
				</li>
				<li>Votre date de début de séjour est le : <?= $_SESSION['DATEDEBSEJOUR'] ?></li>
				<li>Votre date de fin de séjour est le : <?= $_SESSION['DATEFINSEJOUR'] ?></li>
	      <li>Votre mail est : <?= $_SESSION['ADRMAILCOMPTE'] ?></li>
	      ﻿<li>Votre date de naissance est le : <?= $_SESSION['DATENAISCOMPTE'] ?></li>
				<li>Votre numéro de téléphone est : <?= $_SESSION['NOTELCOMPTE']  ?></li>
			</ul>
	</body>
</html>
