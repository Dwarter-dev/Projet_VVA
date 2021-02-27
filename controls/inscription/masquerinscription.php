<?php
include("connexion.php");

if(isset($_POST['envoyerdelete2']))
{
  $ID = intval($_GET['id']);
  $DATEANNULE = new DateTime();
  $sql = "UPDATE inscription
          SET DATEANNULE = '" . $DATEANNULE->format('Y-m-d') . "'
          WHERE NOACT = $ID";
  die(var_dump($sql));
  if (mysqli_query($conn, $sql)) {
        echo "Suppression de l'activité dans la base de donnée";
  }
  else {
        echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);
}
header('Location: http://vva/index.php?page=mesInscriptions');
