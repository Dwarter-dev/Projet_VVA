<?php
if ($_SESSION["TYPEPROFIL"] === 'VA')
{
	header("Location: index.php?page=userAccueilUser");
	exit();
}
if (empty($_SESSION))
{
	header("Location: index.php?page=accueil");
	exit();
}
?>
<nav class="navbar navbar-expand-md navbar-dark navbar-light" style="background-color: #398ac7">
  <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
    <ul class="navbar-nav mr-auto">
			<a class="nav-item nav-link" href="index.php?page=accueil">Village Vacances Alpes </a>
			<?php
			if ($_SESSION["TYPEPROFIL"] === 'EN')
			{
				echo '<a class="nav-item nav-link" href="index.php?page=userProfilAdmin">Profil</a>';
			}
			else
			{
				echo '<a class="nav-item nav-link" href="index.php?page=userProfilUser">Profil</a>';
			}
			 ?>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"> Activités </a>
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
