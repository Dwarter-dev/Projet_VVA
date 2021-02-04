<?php
include("connexion.php");
if(isset($_POST['envoyer']))
{
  $USER = $_POST['USER'];
  $NOACT = $_POST['NOACT'];
  $DATEINSCRIP = $_POST['DATEINSCRIP'];
  $DATEANNULE = $_POST['DATEANNULE'];

  $sql = "INSERT INTO inscription (USER, NOACT, DATEINSCRIP, DATEANNULE)
  VALUES ('$USER','$NOACT','$DATEINSCRIP','$DATEANNULE')";
  if (mysqli_query($conn, $sql)) {
        echo "Création de l'animation dans la base de donnée";
  }
  else {
        echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);
}
header('Location: http://vva/index.php?page=vueinscription');
