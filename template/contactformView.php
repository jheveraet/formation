<?php include("header.php"); ?>
<h1>Ajouter un contact </h1>
<form method="post" action="createController.php">
  <label>prenom</label>: <input type="text" name="prenom" /><br />
  <label>nom</label>: <input type="text" name="nom" /><br />
  <label>age</label>: <input type="text" name="age" /><br />
  <input type="submit" value="ajouter" />
</form>   
<?php include("footer.php"); ?>