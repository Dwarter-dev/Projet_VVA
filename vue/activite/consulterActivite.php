<?php
if (empty($_SESSION))
{
	header("Location: index.php?page=accueil");
	exit();
}
?>
<nav class="navbar navbar-expand-lg navbar-dark navbar-light bg-dark">
  <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
    <ul class="navbar-nav mr-auto">
		<a class="nav-item nav-link" href="index.php?page=accueil">Village Vacances Alpes </a>
		<?php
		if ($_SESSION["TYPEPROFIL"] === 'EN')
		{
			echo '<a class="nav-item nav-link" href="index.php?page=userProfilAdmin">Profil</a>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" > Activités </a>
					<ul class="dropdown-menu">
						<li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Gestion des activités</a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="index.php?page=creeActivite">Créer une Activité</a></li>
							 </ul>
						</li>
						<li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Gestion des inscriptions</a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="index.php?page=mesInscriptions">Liste de mes inscriptions</a></li>
								<li><a class="dropdown-item" href="index.php?page=vueInscription">Liste de tout les inscrits</a></li>
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
			</li>';
		}
		else
		{
			echo '<a class="nav-item nav-link" href="index.php?page=userProfilUser">Profil</a>
						<a class="nav-item nav-link" href="index.php?page=mesInscriptions">Liste de mes inscriptions</a>';
		}
		 ?>
		<a class="nav-item nav-link" href="index.php?page=deconnexion">Déconnexion</a>
	</div>
	<div class="mx-auto order-0">
		<a class="navbar-brand mx-auto" href="#">Consulter les Activités</a>
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
	<table class="table">
		<thead class="thead-dark">
	    <tr>
	      <th scope="col">Numéro Activité</th>
	      <th scope="col">Code Animation</th>
	      <th scope="col">Code Etat de l'Activite</th>
	      <th scope="col">Date de l'Activite</th>
	      <th scope="col">Heures du RDV</th>
	      <th scope="col">Prix de l'Activite (en €)</th>
	      <th scope="col">Heure Debut d'Activite</th>
	      <th scope="col">Heure Fin d'Activite</th>
	      <th scope="col">Date d'annulation Activite</th>
	      <th scope="col">Nom du Responsable</th>
				<th scope="col">Prénom du Responsable</th>
				<?php
				if ($_SESSION["TYPEPROFIL"] === 'EN')
				{
					echo'<th scope="col">Inscriptions</th>
							 <th scope="col">Action</th>';
				}
				else
				{
					echo'<th scope="col">Inscriptions</th>';
				}?>
	    </tr>
			</thead>
	      <?php
				include_once('././fonctions/activite.php');
				$activite = getActivites();
				// Tableau des activités avec pour index le numéro de l'activité
				$tabActivites = [];
        // Parser le tableau pour avoir les id en Index
				foreach ($activite as $item)
				{
					$tabActivites[$item['NOACT']] = $item;
				}
				for($acti = 0; $acti < count($activite); $acti++)
				{
					echo "<tr>";
					foreach($activite[$acti] as $key => $value)
					{
						echo "<td>".$value."</td>";
					}
					// A la fin du tableau on ajoute une colonne Actions permettant
					// D'annuler une activité ou de modifier une activité via son numéro
					$idActivity = $activite[$acti]["NOACT"];
					$codeActivity = $activite[$acti]["CODEANIM"];
					$etatActivity = $activite[$acti]["CODEETATACT"];
					$dtActivity = $activite[$acti]["DATEACT"];
					$hrActivity = $activite[$acti]["HRRDVACT"];
					$prixActivity = $activite[$acti]["PRIXACT"];
					$hrdebutActivity = $activite[$acti]["HRDEBUTACT"];
					$hrfinActivity = $activite[$acti]["HRFINACT"];
					$dt = $activite[$acti]["DATEANNULEACT"];
					$nomresp = $activite[$acti]["NOMRESP"];
					$prenomresp = $activite[$acti]["PRENOMRESP"];
					echo "<td>";
					echo '<a href="index.php?page=creeInscription&id='.$idActivity.'">S´inscrire</a>';
					echo '<br>';
					echo '<a href="index.php?page=mesInscriptions">Mes inscri.</a>';
					echo '<br>';
					if ($_SESSION["TYPEPROFIL"] === 'EN')
					{
					echo '<a href="index.php?page=trierInscription&id='.$idActivity.'">Liste des inscrits</a>';
				  echo '<br>';
					echo '<td>';
					echo '<a href="index.php?page=editionActivite
					&id='.$idActivity.'
					&code='.$codeActivity.'
					&etat='.$etatActivity.'
					&dt='.$dtActivity.'
					&hr='.$hrActivity.'
					&prix='.$prixActivity.'
					&hrdebut='.$hrdebutActivity.'
					&hrfin='.$hrfinActivity.'
					&dtannul='.$dt.'
					&nomresp='.$nomresp.'
					&prenomresp='.$prenomresp.'
					">Editer </a>';
					echo
					'<a href="#" data-toggle="modal" data-target="#bannerformmodal-'. $idActivity .'">Annuler</a>
					<div class="modal fade bannerformmodal" tabindex="-1" role="dialog" aria-labelledby="bannerformmodal" aria-hidden="true" id="bannerformmodal-'.$idActivity.'">
					  <div class="modal-dialog">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="staticBackdropLabel-'.$idActivity.'">Annuler une Activité</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					      	Êtes-vous sur de vouloir annuler cette activitée ?
					      </div>
					      <div class="modal-footer">
								<form method="POST" action="../../controls/activite/masqueractivite.php?id='.$idActivity.'" id="form-'.$idActivity.'">
					        <button type="button" class="btn btn-primary"data-dismiss="modal"> Pas Encore </button>
					        <button type="submit" name="envoyerdelete" class="btn btn-danger"> Oui, annuler cette Activité </button>
								</form>
					      </div>
					    </div>
					  </div>
					</div>';
					echo '</td>';
					echo "</tr>";
				}
			}
				?>
	</table>
</div>
