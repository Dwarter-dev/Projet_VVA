<nav class="navbar navbar-expand-lg navbar-dark navbar-light" style="background-color: #398ac7">
  <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
    <ul class="navbar-nav mr-auto">
		  <a class="nav-item nav-link" href="index.php?page=accueil">Village Vacances Alpes </a>
		  <a class="nav-item nav-link" href="index.php?page=userProfil">Profil</a>
		  <a class="nav-item nav-link" href="index.php?page=consulterActivite">Consulter une Activite</a>
		<li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Animations
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="index.php?page=creeAnimation">Créer une Animation</a>
        <a class="dropdown-item" href="index.php?page=consulterAnimation">Consulter une Animation</a>
      </div>
    </li>
    <a class="nav-item nav-link" href="index.php?page=deconnexion">Déconnexion</a>
	</div>
	<div class="mx-auto order-0">
		<a class="navbar-brand mx-auto" href="#">Créer une Activité</a>
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
<title>Créer une activité</title>
<form action="index.php?page=consulterActivite" method="POST" id="inscActivite" name="form">
	<div class="form-group">
		<label for="nomActivite" class="col-sm-2 col-form-label col-form-label">Nom de l'activité</label>
		<input name"nomActivite" id="" type="text" class="form-control" placeholder="ex : Randonée">
	</div>
  <div class="form-group col-10">
      <label for="dateCreaActivite">Date de création</label>
      <input name"dateCreaActivite" id="dateCreaActivite" type="date" class="form-control" >
  </div>
  <div class="form-group col-10">
      <label for="dateValidActivite">Date de validitée</label>
      <input name"dateValidActivite" id="dateValidActivite" type="date" class="form-control" >
  </div>
  <div class="form-group col-10">
			<label for="heureActivite">Âge Minimum</label>
			<input name"heureActivite" id="heureActivite" type="number" class="form-control">
	</div>
	<div class="form-group">
			<label for="tarifActivite" class="col-sm-2 col-form-label col-form-label">Tarif</label>
			<input name"tarifActivite" id="tarifActivite" type="text" class="form-control" >
	</div>
	<div class="form-group">
			<label for="hrDebutActivite" class="col-sm-2 col-form-label col-form-label">Heure Debut</label>
			<input name"hrDebutActivite" id="hrDebutActivite" type="text" class="form-control" placeholder="ex : 10:00">
	</div>
	<div class="form-group">
		<label for="hrFinActivite" class="col-sm-2 col-form-label col-form-label">Heure Fin</label>
		<input name"hrFinActivite" id="hrFinActivite" type="text" class="form-control" placeholder="ex : 12:00">
	</div>
	<div class="form-group col-10">
		<label for="dtAnnulActivite">Date d'annulation</label>
		<input name"dtAnnulActivite" id="dtAnnulActivite" type="date" class="form-control" >
	</div>
	<div class="form-group">
		<label for="nomRActivite" class="col-sm-2 col-form-label col-form-label">Nom du Responsable</label>
		<input name"nomRActivite" id="nomRActivite" type="text" class="form-control">
	</div>
  <div class="form-group">
    <label for="prenomRActivite" class="col-sm-2 col-form-label col-form-label">Prénom du Responsable</label>
    <input name"prenomRActivite" id="prenomRActivite" type="text" class="form-control">
  </div>
		<input name="valid" type="submit" class="btn btn-outline-light" data-toggle="modal" data-target="#exampleModal"  value="Création de l'activitée">
    <button type="reset" class="btn btn-outline-danger">Vider le formulaire</button>
</form>
