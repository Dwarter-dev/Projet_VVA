<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
    <ul class="navbar-nav mr-auto">
			<a class="nav-item nav-link" href="index.php?page=accueil">Village Vacances Alpes </a>
			<a class="nav-item nav-link" href="index.php?page=userProfil">Profil</a>
			<a class="nav-item nav-link" href="index.php?page=creeAnimation">Créer une Animation</a>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Activités
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					<a class="dropdown-item" href="index.php?page=creeActivite">Créer une Activite</a>
					<a class="dropdown-item" href="index.php?page=consulterActivite">Consulter une Activite</a>
				</div>
			</li>
			<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				<a class="dropdown-item" href="index.php?page=creeActivite">Créer une Activite</a>
				<a class="dropdown-item" href="index.php?page=consulterActivite">Consulter une Activite</a>
			</div>
      </li>
			<a class="nav-item nav-link" href="index.php?page=deconnexion">Déconnexion</a>
		</div>
		<div class="mx-auto order-0">
			<a class="navbar-brand mx-auto" href="#">Consulter une animation</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
				<span class="navbar-toggler-icon"></span>
			</button>
		</div>
		<div class="navbar-collapse collapse w-100 order-3">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
						<a class="nav-link" href="#">Bonjour <?=$_SESSION['NOMCOMPTE']?> !</a>
				</li>
			</ul>
		</div>
</nav>

<table class="table">
	<thead class="thead-dark">
    <tr>
      <th scope="col">Code Animation</th>
      <th scope="col">Code Type Animation</th>
      <th scope="col">Nom de l'Animation</th>
      <th scope="col">Date de création d'Animation</th>
      <th scope="col">Date de Validation d'Animation</th>
      <th scope="col">Durée de l'Animation(min)</th>
      <th scope="col">Limide d'âge</th>
      <th scope="col">Tarif (en €)</th>
      <th scope="col">Nombre de places</th>
      <th scope="col">Description</th>
			<th scope="col">Commentaire</th>
			<th scope="col">Difficultée</th>
    </tr>
	</thead>

      <?php
			include_once('././fonctions/animation.php');

			$animation = getAnimations();
			for($anim = 0; $anim < count($animation); $anim++)
			{
				echo "<tr>";
				foreach($animation[$anim] as $key => $value)
					echo "<td>".$value."</td>";
					echo "</tr>";
			}
			?>

</table>
