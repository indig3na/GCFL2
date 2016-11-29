<?php

class Film {
	private $id;
	private $support;
	private $categorie;
	private $titre;
	private $filename;
	private $annee;
	private $affiche;
	private $synopsis;
	private $acteurs;
	private $description;

	public function __construct($id, $support, $categorie, $titre, $filename, $annee, $affiche, $synopsis, $acteurs, $description) {
		$this->id = $id;
		$this->support = $support;
		$this->categorie = $categorie;
		$this->titre = $titre;
		$this->filename = $filename;
		$this->annee = $annee;
		$this->affiche = $affiche;
		$this->synopsis = $synopsis;
		$this->acteurs = $acteurs;
		$this->description = $description;
	}

	public function get() {
		return $this->;
	}

	public function getSupport() {
		return $this->support;
	}

	public function getcategorie() {
		return $this->categorie;
	}

	public function getTitre() {
		return $this->titre;
	}

	public function getFilename() {
		return $this->filename;
	}

	public function getAnnee() {
		return $this->annee;
	}

	public function getAffiche() {
		return $this->affiche;
	}

	public function getSynopsis() {
		return $this->synopsis;
	}

	public function getActeurs() {
		return $this->acteurs;
	}

	public function getDescription() {
		return $this->description;
	}
}