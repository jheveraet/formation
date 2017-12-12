<?php
	//récupérer l'id de l'utilisateur à supprimer via l'url
	
  
  $id2update = $_GET['id']; // /!\ NTU
  try {
    $pdo = new PDO('mysql:host=localhost;dbname=annuaire', 'annuaire2', 'annuaire');
    $resultats = $pdo->query("SELECT * from annuaire where id=$id2update");
    $pdo = null;
  } catch(PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
  }


  //TRaITEMENT DE MON FORMULAIRE ................................
 if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['age'])) {
  try {
      $pdo = new PDO('mysql:host=localhost;dbname=annuaire', 'annuaire2', 'annuaire');
      //executer requete de creation
      $prenom = $_POST['prenom'];
      $nom = $_POST['nom'];
      $age = $_POST['age'];
      $resultats = $pdo->query("UPDATE annuaire set prenom = '$prenom', age = '$age', nom = '$nom' WHERE id=$id2update");
      $pdo = null;
      die("c'est fait!");
    } catch(PDOException $e) {
      print "Erreur !: " . $e->getMessage() . "<br/>";
      die();
    }
    //traiter le formulaire
    //faire la mise à jour via sql
    //afficher ok à l'utilisateur ou le rediriger vers la page liste

  }
  //créer un formulaire pré-rempli qu'on peut envoyer pour mise à jour sur un autre script php ou le même. 
?>
<html lang="fr">
<head>
  <title>Mise a jour de contact</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
  <!-- entete -->
  <div class='container'>
    <div class="row">
      <div class="col-md-3">
        <img src="img/logo.gif" class="logo">
      </div>
      <div class="col-md-9">
        <h1>Mise à jour de contact </h1>     
      </div>
    </div>
    <!-- FIN entete -->
    <div class="row">
      <div class="col-12">
        <?php 
          foreach($resultats as $resultat) { ?>
      	<form method="post" action="">
          <label>Prénom</label>: <input type="text" name="prenom" value="<?=$resultat['prenom']?>" /><br />
          <label>Nom</label>: <input type="text" name="nom" value="<?=$resultat['nom']?>" /><br />
          <label>Âge</label>: <input type="text" name="age" value="<?=$resultat['age']?>" /><br />
          <input type="submit" value="mettre à jour"/>
        </form>
        <?php } ?>
        <?php 
          print_r($_POST);
        ?>


       </div>
        <footer id="footer" role="contentinfo" class="pam">
         <a href="entite.php"><img src="button/btns_back.jpg" alt="back" height="42" width="42">Back Home</a>
       </footer>
       <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
     </body>
     </html>	