<?php
  include("bdd.php");
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
?>
<?php include("header.php"); ?>
    <div class="row">
      <div class="col-12">
        <?php 
          foreach($contact as $value) { ?>
      	<form method="post" action="">
          <label>Prénom</label>: <input type="text" name="prenom" value="<?=$value['prenom']?>" /><br />
          <label>Nom</label>: <input type="text" name="nom" value="<?=$value['nom']?>" /><br />
          <label>Âge</label>: <input type="text" name="age" value="<?=$value['age']?>" /><br />
          <input type="submit" value="mettre à jour"/>
        </form>
        <?php } ?>
        <?php 
          print_r($_POST);
        ?>


       </div>

<?php include("footer.php"); ?>