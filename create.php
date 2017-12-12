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
<?php include("header.php"); ?>
  
        <h1>Ajouter un contact </h1>
        <form method="post">
          <label>prenom</label>: <input type="text" name="prenom" /><br />
          <label>nom</label>: <input type="text" name="nom" /><br />
          <label>age</label>: <input type="text" name="age" /><br />
          <input type="submit" value="ajouter" />
        </form>   
     
<?php include("footer.php"); ?>