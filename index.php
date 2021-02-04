<?php
require_once("fonctions/lib.php"); //fichier de fonctions globales à tes modèles
require_once("fonctions/user.php");

startSession(); //démarre une session si elle n'existe pas

include_once("public/head.html");

// Routeur
if(!empty($_GET['page'])) {
    switch($_GET['page']) {
        case 'accueil':
        include('controls/user/accueil.php');
        break;
        case 'deconnexion':
        stopSession();
        break;
        case 'userProfilUser':
        include('vue/user/userProfilUser.php');
        break;
        case 'userProfilAdmin':
        include('vue/user/userProfilAdmin.php');
        break;
        case 'creeAnimationAdmin':
        include('vue/animation/creeAnimationAdmin.php');
        break;
        case 'consulterAnimationAdmin':
        include('vue/animation/consulterAnimationAdmin.php');
        break;
        case 'creeActiviteAdmin':
        include('vue/activite/creeActiviteAdmin.php');
        break;
        case 'consulterActiviteAdmin':
        include('vue/activite/consulterActiviteAdmin.php');
        break;
        case 'consulterActiviteUser':
        include('vue/activite/consulterActiviteUser.php');
        break;
        case 'inscription':
        include('vue/activite/inscription.php');
        break;
        case 'vueinscription':
        include('vue/activite/vueinscription.php');
        break;
        /*case 'InscriptionAdmin'
        include('vue/activite/inscriptionAdmin.php');
        break;
        case 'Test':
        include('vue/activite/index2.php');
        break;*/
    }
} else {
    header('Location: index.php?page=accueil');
}

include_once("public/footer.html");
