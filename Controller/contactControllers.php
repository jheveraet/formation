<?php
	function listContactAction() {
		$resultats = getAllContacts(); 
		
		include("template/listView.php");
	}

	function showContactAction() {

	}

	?>