<?php
include("bdd.php");

 $resultats = getAllContacts(); 


?>

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
							<a href="detail.php?id=<?=$row['id']?>">Voir</a> / 
							<a href="delete.php?id=<?=$row['id']?>">supprimer</a> /
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