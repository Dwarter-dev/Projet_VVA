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
			<a class="nav-item nav-link" href="index.php?page=consulterActivite">Consulter une Activite</a>
    <a class="nav-item nav-link" href="index.php?page=deconnexion">Déconnexion</a>
	</div>
	<div class="mx-auto order-0">
		<a class="navbar-brand mx-auto" href="#">S'inscrire à une Activité</a>
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
<title>S'inscrire à une animation</title>
<form action="../../controls/inscription/traitement.php" method="POST" id="inscActivite">
  <div class="form-group">
		<label for="User" class="col-sm-2 col-form-label col-form-label">Nom de l'inscrit</label>
		<input name="USER" id="USER" type="text" class="form-control">
	</div>
  <div class="form-group">
    <label for="NoAct" class="col-sm-2 col-form-label col-form-label">Numéro de l'activité</label>
    <input name="NOACT" id="NOACT" type="text" class="form-control">
  </div>
  <div class="form-group col-10">
      <label for="dateIncription">Date d'inscription</label>
      <input name="DATEINSCRIP" id="DATEINSCRIP" type="date" class="form-control" >
  </div>
  <div class="form-group col-10">
      <label for="dateAnnulation">Date d'annulation</label>
      <input name="DATEANNULE" id="DATEANNULE" type="date" class="form-control" >
  </div>
  <div class="form-group col-10">
    <input type="submit" name="envoyer"class="btn btn-outline-light">
    <button type="reset" class="btn btn-outline-danger">Vider le formulaire</button>
  </div>
</form>
