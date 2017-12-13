<?php 

include("Contact.php");

function getPdoObject() {
	try {
		$pdo = new PDO('mysql:host=localhost;dbname=annuaire', 'annuaire', 'annuaire');
	} catch(PDOException $e) {
		print "Erreur !: " . $e->getMessage() . "<br/>";
		die();
	}
	
	return $pdo;
}
function getAllContacts() { 
	$pdo =getPdoObject();
	$sth = $pdo->prepare("SELECT id,prenom,nom,age from annuaire");
	$sth->execute();
	$resultats = $sth->fetchAll(PDO::FETCH_ASSOC);
	$pdo = null;
	return $resultats;
}

function getContact($id) {
	$pdo =getPdoObject();
	$resultats = $pdo->query("SELECT * from annuaire where id=$id");
	$pdo = null;
	foreach($resultats as $result) {
		$contact = new Contact($result['prenom'], $result['nom'], $result['age']);
	}
	return $contact;
}

function updateContact($id, $prenom, $nom, $age) {
	 $pdo =getPdoObject();
	 $prenom = $_POST['prenom'];
      $nom = $_POST['nom'];
      $age = $_POST['age'];
      $resultats = $pdo->query("UPDATE annuaire set prenom = '$prenom', age = '$age', nom = '$nom' WHERE id=$id");
      $pdo = null;
      die("c'est fait!");
}

function deleteContact($id2delete) {
	$pdo =getPdoObject();
	$resultats = $pdo->query("DELETE from annuaire where id=$id2delete");
	$pdo = null;
}


function createContact($prenom, $nom, $age) {
	$pdo = getPdoObject();
	$resultats = $pdo->query("INSERT INTO annuaire (prenom, nom, age) VALUES ('$prenom', '$nom', '$age')");
	$lastid = $pdo->lastInsertId(); 
	$pdo = null;
	return $lastid;
	
}

function getAllCompetences() {
	$pdo =getPdoObject();
	$sth = $pdo->prepare("SELECT id,nom from competence");
	$sth->execute();
	$resultats = $sth->fetchAll(PDO::FETCH_ASSOC);
	$pdo = null;
	return $resultats;
}

function createCompetence($nom) {
	$pdo = getPdoObject();
	$resultats = $pdo->query("INSERT INTO competence (nom) VALUES ('$nom')");
	$lastid = $pdo->lastInsertId(); 
	$pdo = null;
	return $lastid;
}
?>