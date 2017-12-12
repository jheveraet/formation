<?php
/* RAPPATRIEMENT DE DONNEES */
			//se connecter à la bdd
			//besoin des informations de connexions
			//besoin d'un objet PDO.
			//construire un objet pdo
try {
	$pdo = new PDO('mysql:host=localhost;dbname=annuaire', 'annuaire2', 'annuaire');

			//utiliser l'objet pdo pour executer une requete
	$resultats = $pdo->query('SELECT * from annuaire');
	$pdo = null;
} catch(PDOException $e) {
	print "Erreur !: " . $e->getMessage() . "<br/>";
	die();
}

?>


<!doctype html>
<html lang="en">
  <head>
    <title>Annuaire de contact</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
<body>
	<div class='container'>
		<div class="row">
			<div class="col-md-3">
				<img src="img/logo.gif" class="logo">
			</div>
			<div class="col-md-9">
				<h1>Annuaire de contact	</h1>		
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">	
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>prenom</th>
							<th>nom</th>
							<th>actions</th>
						</tr>
					</thead>
					<tbody>
						<?php
							//parcourrir les resultats
							foreach($resultats as $row) {
								?>
								<tr>
									<td><?=$row['nom']?></td>
									<td><?=$row['prenom']?>( <?=$row['age']?> ans)</td>
									<td>
										<a href="DetailContact.php?id=<?=$row['id']?>">Voir</a> / 
										<a href="delete2.php?id=<?=$row['id']?>">supprimer</a> /
										<a href="update.php?id=<?=$row['id']?>">Mise à jour</a>
									</td>
								</tr>
								<?php
							}

							?>
					</tbody>
				</table>
			</div>
		</div>
		<footer id="footer" role="contentinfo" class="footer">
					...
		</footer>
	</div><!--/container-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html> 