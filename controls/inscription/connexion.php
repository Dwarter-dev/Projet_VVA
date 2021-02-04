<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = "gacti";
//On établit la connexion
$conn = mysqli_connect($servername, $username, $password,$dbname);

//On vérifie la connexion
if(!$conn){
    die('Erreur : ' .mysqli_connect_error());
}
echo 'Connexion à la BDD réussie';
