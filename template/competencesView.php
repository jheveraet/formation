<?php include("header.php"); ?>
<h1> Gestion des compétences </h1>
<ul>
<?php foreach ($comptences as $competence) { ?>
	<li><?=$competence['nom']?></li>
<?php } ?>
</ul>
<br/>
<br />

<h1> Ajouter une compétence </h1>
<form method="post" action="saveCompetenceController.php" >
	<label>nom de compétence : </label><br />
	<input type="text" name="nom" placeholder="php" />
	<input type="submit" value="ajouter" />
</form>
<?php include("footer.php"); ?>