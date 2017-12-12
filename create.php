<?php 
  if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['age'])) {
    //connecter à la bdd
    try {
      $pdo = new PDO('mysql:host=localhost;dbname=annuaire', 'annuaire2', 'annuaire');
      //executer requete de creation
      $prenom = $_POST['prenom'];
      $nom = $_POST['nom'];
      $age = $_POST['age'];
      $resultats = $pdo->query("INSERT INTO annuaire (prenom, nom, age) VALUES ('$prenom', '$nom', '$age')");
      $pdo = null;
      die("c'est fait!");
    } catch(PDOException $e) {
      print "Erreur !: " . $e->getMessage() . "<br/>";
      die();
    }
  }
?>

<html lang="fr">
<head>
  <title>Annuaire de contact</title>
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
        <h1>Ajouter un contact </h1>
        <form method="post">
          <label>prenom</label>: <input type="text" name="prenom" /><br />
          <label>nom</label>: <input type="text" name="nom" /><br />
          <label>age</label>: <input type="text" name="age" /><br />
          <input type="submit" value="ajouter" />
        </form>   
      </div>
    </div>
    <!-- FIN entete -->
    <div class="row">
      <div class="col-8">
      </div>
      <div class="col-4">photo
        <img src="img/img dm.jpg" height="100" width="auto"></div>
      </div>

      <footer id="footer" role="contentinfo" class="pam">
       <a href="entite.php"><img src="button/btns_back.jpg" alt="back" height="42" width="42">Back Home</a>
     </footer>
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
   </body>
   </html>  