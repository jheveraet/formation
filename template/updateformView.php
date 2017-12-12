<?php include("header.php"); ?>
    <div class="row">
      <div class="col-12">

         
        	<form method="post" action="">
            <label>Prénom</label>: 
            <input type="text" name="prenom" value="<?=$contact->getPrenom()?>" /><br />
            <label>Nom</label>: 
            <input type="text" name="nom" value="<?=$contact->getPrenom()?>" /><br />
            <label>Âge</label>: 
            <input type="text" name="age" value="<?=$contact->getAge()?>" /><br />
            
            <input type="submit" value="mettre à jour"/>
          </form>



       </div>

<?php include("footer.php"); ?>