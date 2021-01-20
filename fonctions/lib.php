<?php

function startSession() {
    if(empty($_SESSION)) {
      session_start();
  }
  return true;
}

function stopSession(){
  session_unset();
  session_destroy();
  header('Location: ../index.php?page=accueil');
}
