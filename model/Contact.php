<?php 

class Contact {
	
	private $nom;
	private $prenom;
	private $age;

	function __construct($p, $n, $a) {
		$this->prenom = $p;
		$this->nom = $n;
		$this->age = $a;
	}

	function getPrenom() {
		return $this->prenom;
	}

	function getNom() {
		return $this->nom;
	}

	function getAge() {
		return $this->age;
	}
}