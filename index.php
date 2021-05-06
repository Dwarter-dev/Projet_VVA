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
        case 'creeAnimation':
        include('vue/animation/creeAnimation.php');
        break;
        case 'consulterAnimation':
        include('vue/animation/consulterAnimation.php');
        break;
        case 'creeActivite':
        include('vue/activite/creeActivite.php');
        break;
        case 'consulterActivite':
        include('vue/activite/consulterActivite.php');
        break;
        case 'editionActivite':
        include('vue/activite/editionActivite.php');
        break;
        case 'creeInscription':
        include('vue/inscription/creeInscription.php');
        break;
        case 'vueInscription':
        include('vue/inscription/vueInscription.php');
        break;
        case 'mesInscriptions':
        include('vue/inscription/mesInscriptions.php');
        break;
        case 'trierInscription':
        include('vue/inscription/trierInscription.php');
        break;
    }
} else {
    header('Location: index.php?page=accueil');
}

include_once("public/footer.html");
