<?php

	include('vendor/autoload.php');
	include("model/model.php");

	use League\Csv\Writer;

	$resultats = getAllContacts(); 
	$csv = Writer::createFromFileObject(new SplTempFileObject());
	$csv->setDelimiter(';');
	$csv->insertOne(['id', 'prenom', 'nom', 'age']);
	$csv->insertAll($resultats);

	$csv->output('users.csv');
	die;
?>

