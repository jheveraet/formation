<?php 
  include("model/model.php");
  //createContact();
  if( isset($_POST['nom'])  ) {
   
    $nom = $_POST['nom']; // NTU
 
    $lastidinserted = createCompetence($nom);
    echo "ok";
    die();
  }
  
?>