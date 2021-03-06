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
			 <?php
			 if ($_SESSION["TYPEPROFIL"] === 'EN')
			 {
				 echo '<li class="nav-item dropdown">
								 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" > Activités </a>
									 <ul class="dropdown-menu">
										 <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Gestion des activités</a>
											 <ul class="dropdown-menu">
													 <li><a class="dropdown-item" href="index.php?page=consulterActivite">Consulter les Activités</a></li>
													 <li><a class="dropdown-item" href="index.php?page=creeActivite">Créer une Activité</a></li>
											 </ul>
										</li>
										<li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Gestion des inscriptions</a>
			 							 <ul class="dropdown-menu">
										 <li><a class="dropdown-item" href="index.php?page=vueInscription">Liste de tout les inscrits</a></li>
										 </ul>
									 </li>
								 </ul>
						 	 </li>';
			 }
			 else
			 {
				 echo '<li><a class="nav-item nav-link" href="index.php?page=consulterActivite">Consulter les Activités</a></li>';
			 }
			 ?>
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
		<a class="navbar-brand mx-auto" href="#">Mes Inscriptions</a>
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
			<th scope="col">Action</th>
    </th>
	</thead>
      <?php
			include_once('././fonctions/inscription.php');
			$inscription = getInscription();
			// Tableau des activités avec pour index le numéro de l'activité
			$tabInscription = [];
			// Parser le tableau pour avoir les id en Index
			foreach ($inscription as $item)
			{
				$tabInscription[$item['NOACT']] = $item;
			}
			for($inscri = 0; $inscri < count($inscription); $inscri++)
			{
				echo "<tr>";
				foreach($inscription[$inscri] as $key => $value)
				{
					echo "<td>".$value."</td>";
				}
			$idActivity = $inscription[$inscri]["NOACT"];
			echo "<td>";
			echo '<a href="#" data-toggle="modal" data-target="#bannerformmodal2-'. $idActivity .'">Annuler</a>
								<div class="modal fade bannerformmodal2" tabindex="-1" role="dialog" aria-labelledby="bannerformmodal2" aria-hidden="true" id="bannerformmodal2-'.$idActivity.'">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="staticBackdropLabel-'.$idActivity.'">Annuler une Inscription</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												Êtes-vous sur de vouloir annuler cette inscription ?
											</div>
											<div class="modal-footer">
											<form method="POST" action="../../controls/inscription/masquerinscription.php?id='.$idActivity.'" id="form-'.$idActivity.'">
												<button type="button" class="btn btn-primary"data-dismiss="modal"> Pas Encore </button>
												<button type="submit" name="envoyerdelete2" class="btn btn-danger"> Oui, annuler cette Inscription </button>
											</form>
											</div>
										</div>
									</div>
								</div>';
			echo '<br>';
			echo '<a href="index.php?page=consulterActivite">Retour aux Activités</a>';
		}
			?>
</table>
