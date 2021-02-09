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
		<a class="nav-item nav-link" href="index.php?page=deconnexion">Déconnexion</a>
    <a class="nav-item nav-link" href="index.php?page=inscription">S'inscrire à une activité</a>
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

<table class="table">
	<thead class="thead-dark">
    <tr>
      <th scope="col">Numéro Inscription</th>
      <th scope="col">Nom de l'Utilisateur</th>
      <th scope="col">Numéro d'Activité</th>
      <th scope="col">Date d'Inscription</th>
      <th scope="col">Date d'Annulation</th>
    </tr>
	</thead>
      <?php
			include_once('././fonctions/inscription.php');

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
