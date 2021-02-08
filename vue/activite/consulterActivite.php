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
			echo '<a class="nav-item nav-link" href="index.php?page=userProfilAdmin">Profil</a>.
			<li class="nav-item dropdown">
				 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					 Activités
				 </a>
				 <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					 <a class="dropdown-item" href="index.php?page=creeActivite">Créer une Activite</a>
					 <a class="dropdown-item" href="index.php?page=inscription">Inscription à une activité</a>
				 </div>
			 </li>

			<li class="nav-item dropdown">
				 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					 Animations
				 </a>
				 <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					 <a class="dropdown-item" href="index.php?page=creeAnimation">Créer une Animation</a>
					 <a class="dropdown-item" href="index.php?page=consulterAnimation">Consulter une Animation</a>
				 </div>
			 </li>';
		}
		else
		{
			echo '
			<a class="nav-item nav-link" href="index.php?page=userProfilUser">Profil</a>
			<li class="nav-item dropdown">
				 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					 Activités
				 </a>
				 <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					 <a class="dropdown-item" href="index.php?page=vueinscription">Liste des Inscriptions</a>
					 <a class="dropdown-item" href="index.php?page=inscription">Inscription à une activité</a>
				 </div>
			 </li>';
		}
		 ?>
		<a class="nav-item nav-link" href="index.php?page=deconnexion">Déconnexion</a>

	</div>
	<div class="mx-auto order-0">
		<a class="navbar-brand mx-auto" href="#">Consulter une Activité</a>
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
<div class="container">
	<table class="table">
		<thead class="thead-dark">
	    <tr>
	      <th scope="col">Code Animation</th>
	      <th scope="col">Nom Activite</th>
	      <th scope="col">Code Etat de l'Activite</th>
	      <th scope="col">Date de l'Activite</th>
	      <th scope="col">Heures du RDV</th>
	      <th scope="col">Prix de l'Activite (en €)</th>
	      <th scope="col">Heure Debut d'Activite</th>
	      <th scope="col">Heure Fin d'Activite</th>
	      <th scope="col">Date d'annulation Activite</th>
	      <th scope="col">Nom du Responsable</th>
				<th scope="col">Prénom du Responsable</th>
				<th scope="col">Action</th>
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
					echo '<td>';
					echo '<a href="index.php?page=editionActivite&id='.$idActivity.'">Editer </a>';
					echo '<a href="#">Annuler </a>';
					echo '</td>';
					echo "</tr>";
				}
				?>

	</table>
</div>
