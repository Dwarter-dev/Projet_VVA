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
        case 'userProfil':
        include('vue/user/userProfil.php');
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
        case 'Test':
        include('vue/activite/index2.php');
        break;
    }
} else {
    header('Location: index.php?page=accueil');
}

include_once("public/footer.html");

/*
Organisation projet

public |{
    head.html
    menu.php
    footer.html
    css {
        main.css
    }
    img {
        tes images
    }
}

vues {
    user {
        formConnexion.php
        accueil.php
    }

    activite {

    }
    animation {

    }
}

controlers {
    user {
        accueil.php
    }

    activite {

    }
    animation {

    }
}

*/
