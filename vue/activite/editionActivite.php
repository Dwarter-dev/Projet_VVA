<?php
if (empty($_SESSION))
{
	header("Location: index.php?page=accueil");
	exit();
}
?>
<nav class="navbar navbar-expand-lg navbar-dark navbar-light" style="background-color: #398ac7">
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
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" > Activités </a>
					<ul class="dropdown-menu">
						<li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Gestion des activités</a>
							<ul class="dropdown-menu">
								<?php
								if ($_SESSION["TYPEPROFIL"] === 'EN')
								{
									echo '<li><a class="dropdown-item" href="index.php?page=consulterActivite">Consulter une Activité</a></li>';
									echo '<li><a class="dropdown-item" href="index.php?page=creeActivite">Créer une Activité</a></li>';
								}
								else
								{
									echo '';
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
			<?php
			if ($_SESSION["TYPEPROFIL"] === 'EN')
			{
				echo '<li class="nav-item dropdown">
							 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"> Animations </a>
							 <ul class="dropdown-menu">
								 <li><a class="dropdown-item" href="index.php?page=creeAnimation">Créer une Animation</a></li>
								 <li><a class="dropdown-item" href="index.php?page=consulterAnimation">Consulter une Animation</a></li>
							 </ul>
						 </li>';
			}
			else
			{
				echo '';
			}
			?>
    <a class="nav-item nav-link" href="index.php?page=deconnexion">Déconnexion</a>
	</div>
	<div class="mx-auto order-0">
		<a class="navbar-brand mx-auto" href="#">Modifier une Activité</a>
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
  </ul>
</nav>

<form action="../../controls/activite/traitementedit.php" method="POST" id="editActivite">
		<input name="NOACT" id="NOACT" type="hidden" class="form-control" value="<?=$_GET['id']?>">
	<div class="form-group">
		<label for="CodeAnimation" class="col-sm-2 col-form-label col-form-label">Code de l'animation</label>
		<input name="CODEANIM" id="CODEANIM" type="text" class="form-control" value="<?=$_GET['code']?>">
	</div>
	<div class="form-group">
		<label for="CodeEtatActivite" class="col-sm-2 col-form-label col-form-label">Etat de l'activité</label>
		<input name="CODEETATACT" id="CODEETATACT" type="text" class="form-control" value="<?=$_GET['etat']?>">
	</div>
	<div class="form-group col-10">
			<label for="dateCreaActivite">Date de l'activité</label>
			<input name="DATEACT" id="DATEACT" type="date" class="form-control" value="<?=$_GET['dt']?>">
	</div>
	<div class="form-group col-10">
			<label for="PrixActivite">Prix de l'activité</label>
			<input name="PRIXACT" id="PRIXACT" type="number" class="form-control" value="<?=$_GET['prix']?>">
	</div>
	<div class="form-group col-10">
			<label for="hrActivite">Heure de l'activité</label>
			<input name="HRRDVACT" id="HRRDVACT" type="time" class="form-control" value="<?=$_GET['hr']?>">
	</div>
	<div class="form-group col-10">
			<label for="hrDebutActivite">Heure Début</label>
			<input name="HRDEBUTACT" id="HRDEBUTACT" type="time" class="form-control" value="<?=$_GET['hrdebut']?>">
	</div>
	<div class="form-group col-10">
		<label for="hrFinActivite">Heure Fin</label>
		<input name="HRFINACT" id="HRFINACT" type="time" class="form-control" value="<?=$_GET['hrfin']?>">
	</div>
	<div class="form-group col-10">
		<label for="dtAnnulActivite">Date d'annulation</label>
		<input name="DATEANNULEACT" id="DATEANNULEACT" type="date" class="form-control" value="<?=$_GET['dtannul']?>">
	</div>
	<div class="form-group">
		<label for="nomRActivite" class="col-sm-2 col-form-label col-form-label">Nom du Responsable</label>
		<input name="NOMRESP" id="NOMRESP" type="text" class="form-control" value="<?=$_GET['nomresp']?>">
	</div>
	<div class="form-group">
		<label for="prenomRActivite" class="col-sm-2 col-form-label col-form-label">Prénom du Responsable</label>
		<input name="PRENOMRESP" id="PRENOMRESP" type="text" class="form-control" value="<?=$_GET['prenomresp']?>">
	</div>
	<div class="form-group col-10">
		<input type="submit" name="envoyeredit" class="btn btn-outline-light">
	</div>
</form>
