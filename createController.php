<?php 
  include("model/model.php");
  //createContact();
  if( isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['age']) ) {
    //traiter une soumission de formulaire
    $prenom = $_POST['prenom']; // NTU
    $nom = $_POST['nom']; // NTU
    $age = $_POST['age']; // NTU

    $lastidinserted = createContact($prenom, $nom, $age);
    header("Location: detailController.php?id=".$lastidinserted);
  }

  include("template/contactformView.php");
  
?>
