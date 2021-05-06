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
							 <li><a class="dropdown-item" href="index.php?page=mesInscriptions">Liste de mes inscriptions</a></li>
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
	</div>
	<div class="mx-auto order-0">
		<a class="navbar-brand mx-auto" href="#">Liste de tout les Inscrits</a>
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
      <th scope="col">Numéro Inscription</th>
      <th scope="col">Nom de l'Utilisateur</th>
      <th scope="col">Numéro d'Activité</th>
      <th scope="col">Date d'Inscription</th>
			<th scope="col">Date d'Annulation</th>
    </th>
	</thead>
      <?php
			include_once('././fonctions/inscriptionall.php');

			$inscription = getInscription();
			for($inscri = 0; $inscri < count($inscription); $inscri++)
			{
				echo "<tr>";
				foreach($inscription[$inscri] as $key => $value)
					echo "<td>".$value."</td>";
					echo "</tr>";
			}
			?>
</table>
