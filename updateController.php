<?php
  include("model/model.php");
	//récupérer l'id de l'utilisateur à supprimer via l'url
	
  
  $id2update = $_GET['id']; // /!\ NTU
  $contact =getContact($id2update);


  //TRaITEMENT DE MON FORMULAIRE ................................
 if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['age'])) {
  $prenom = $_POST['prenom']; //specialchars, htmlentities etc... NTU
  $nom = $_POST['nom']; //specialchars, htmlentities etc... NTU
  $age = $_POST['age']; //specialchars, htmlentities etc... NTU
  $updatestatus = updateContact($id2update, $prenom, $nom, $age);

  }
  //créer un formulaire pré-rempli qu'on peut envoyer pour mise à jour sur un autre script php ou le même. 
  include("template/updateformView.php");
?>
