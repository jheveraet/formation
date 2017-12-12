<?php
include("bdd.php");
// récupere l'ID dans l'URL
$id2delete = $_GET['id']; // /!\ NTU Never Trust User
		//supprimer effectivement l'utilisateur qui a cet id
deleteContact($id2delete);
	
	
	//afficher message comme quoi c'est tout bon
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
        <h1>Annuaire de contact </h1>     
      </div>
    </div>
    <!-- FIN entete -->
    <div class="row">
      <div class="col-12">
      	<div class="alert"> utilisateur supprimer. Tout c'est bien passé </div>
       </div>
        <footer id="footer" role="contentinfo" class="pam">
         <a href="index.php"><img src="button/btns_back.jpg" alt="back" height="42" width="42">Back Home</a>
       </footer>
       <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
     </body>
     </html>

