<?php include('header.php'); ?>

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
							<a href="detailController.php?id=<?=$row['id']?>">Voir</a> / 
							<a href="deleteController.php?id=<?=$row['id']?>">supprimer</a> /
							<a href="updateController.php?id=<?=$row['id']?>">Mise à jour</a>
						</td>
					</tr>
					<?php
				}

				?>
			</tbody>
		</table>
	</div>
	<!-- ajouter une contact dans la bdd -->
	<div class="col-md-12">
		<a class="btn btn-primary" href="createController.php" role="button">Ajouter utilisateur</a>
		
	</div>	

</div>