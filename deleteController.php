<?php
include("model/model.php");
include("header.php")
// récupere l'ID dans l'URL
$id2delete = $_GET['id']; // /!\ NTU Never Trust User
//supprimer effectivement l'utilisateur qui a cet id
deleteContact($id2delete);
include("template/deleteView.php");
?>
