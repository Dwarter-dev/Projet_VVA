<nav class="navbar navbar-expand-lg navbar-dark navbar-light" style="background-color: #398ac7">
  <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
    <ul class="navbar-nav mr-auto">
			<a class="nav-item nav-link" href="index.php?page=accueil">Village Vacances Alpes </a>
			<a class="nav-item nav-link" href="index.php?page=userProfil">Profil</a>
			<a class="nav-item nav-link" href="index.php?page=consulterAnimation">Consulter une Animation</a>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Activités
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					<a class="dropdown-item" href="index.php?page=creeActivite">Créer une Acivité</a>
					<a class="dropdown-item" href="index.php?page=consulterActivite">Consulter une Acivité</a>
				</div>
			</li>
			<a class="nav-item nav-link" href="index.php?page=deconnexion">Déconnexion</a>
    </ul>
    </div>
    <div class="mx-auto order-0">
      <a class="navbar-brand mx-auto" href="#">Créer une animation</a>
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
<title>Créer une animation</title>
<form action="../../controls/animation/traitement.php" method="POST" id="inscAnimation" name="form">
	<div class="form-group">
		<label for="nomAnimation" class="col-sm-2 col-form-label col-form-label">Nom de l'animation</label>
		<input name="NOMANIM" id="NOMANIM" type="text" class="form-control">
	</div>
  <div class="form-group">
    <label for="codeAnimation" class="col-sm-2 col-form-label col-form-label">Code de l'animation</label>
    <input name="CODEANIM" id="CODEANIM" type="text" class="form-control">
  </div>
  <div class="form-group">
    <label for="codeTypeAnimation" class="col-sm-2 col-form-label col-form-label">Nom de l'animation</label>
    <input name="CODETYPEANIM" id="CODETYPEANIM" type="text" class="form-control">
  </div>
  <div class="form-group col-10">
      <label for="dateCreaAnimation">Date de création</label>
      <input name="DATECREATIONANIM" id="DATECREATIONANIM" type="date" class="form-control" >
  </div>
  <div class="form-group col-10">
      <label for="dateValidAnimation">Date de validitée</label>
      <input name="DATEVALIDITEANIM" id="DATEVALIDITEANIM" type="date" class="form-control" >
  </div>
  <div class="form-group col-10">
			<label for="dureeAnimation">Durée de l'Animation (min)</label>
			<input name="DUREEANIM" id="DUREEANIM" type="number" class="form-control">
	</div>
	<div class="form-group col-10">
			<label for="limiteAnimation">Limide d'âge</label>
			<input name="LIMITEAGE" id="LIMITEAGE" type="number" class="form-control" >
	</div>
	<div class="form-group col-10">
			<label for="tarifAnimation">Tarif</label>
			<input name="TARIFANIM" id="TARIFANIM" type="number" class="form-control">
	</div>
  <div class="form-group col-10">
    <label for="nbPlacesAnimation">Nombre de places</label>
    <input name="NBREPLACEANIM" id="NBREPLACEANIM" type="number" class="form-control">
  </div>
  <div class="form-group">
    <label for="diffAnimation" class="col-sm-2 col-form-label col-form-label">Difficultée</label>
    <input name="DIFFICULTEANIM" id="DIFFICULTEANIM" type="text" class="form-control">
  </div>
	<div class="form-group col-10">
		<label for="commAnimation">Commentaire</label>
    <textarea name="COMMENTANIM" id="COMMENTANIM" type="text" class="form-control" id="commAnimation" rows="2"></textarea>
	</div>
  <div class="form-group col-10">
    <label for="descripAnimation">Description</label>
    <textarea name="DESCRIPTANIM" id="DESCRIPTANIM" type="text" class="form-control" id="descripAnimation" rows="3"></textarea>
  </div>
  <div class="form-group col-10">
    <input type="submit" name="envoyer"class="btn btn-outline-light">
    <button type="reset" class="btn btn-outline-danger">Vider le formulaire</button>
  </div>
</form>
