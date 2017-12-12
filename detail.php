<?php 
include("bdd.php");

/*¨RAPATRIEMENT DES DONNES DEPUIS L'URL */
if(!empty($_GET['id'])) { 
  $id= $_GET['id'];
} else {
  header("Location: entite.php");
}

/* RAPPATRIEMENT DES DONNES DEPUIS LA BDD */
$contact = getContact($id);


?>

<?php include("header.php"); ?>
    <div class="row">
      <div class="col-8">
        <?php
          foreach($contact as $row) { ?>
            <h1><?=$row['nom']?></h1>
            <h2><?=$row['prenom']?></h2>
            ...
         <?php } ?>
        </p></div>
        <div class="col-4">photo
          <img src="img/img dm.jpg" height="100" width="auto"></div>
        </div>
<? include("footer.php"); ?>