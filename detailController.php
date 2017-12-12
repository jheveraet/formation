<?php 
include("model/model.php");

/*¨RAPATRIEMENT DES DONNES DEPUIS L'URL */
if(!empty($_GET['id'])) { 
  $id= $_GET['id'];
} else {
  header("Location: index.php");
}

/* RAPPATRIEMENT DES DONNES DEPUIS LA BDD */
$contact = getContact($id);
include("template/detailView.php");
?>
