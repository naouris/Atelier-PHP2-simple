<?php
  class Club {
    private $id;
	private $nom;
	
	private $description;
	private $adresse;
	private $domaine;
	
	public function __construct($nom,$description,$adresse,$domaine){
		$this->nom=$nom;
		
		$this->description=$description;
		$this->adresse=$adresse;
		$this->domaine=$domaine;
		
	}
	 public function getid() {
		 return $this->id;
	 
	 }
	  public function getNom(){
	      return $this->nom;
	  }
		  
	
	 
	 public function getDescription() {
		 return $this->description;
	 }
	 
	 public function getAdresse() {
		 return $this->adresse;
	 }
	 
	  public function getDomaine() {
		 return $this->domaine;
	 }
	 
	 
	 
	 
	  public function setNom($nom) {
		 $this->nom=$nom;
	 }
	  public function setDescription($description) {
		  $this->description=$description;
	 }
	  public function setAdresse($adresse) {
		  $this->adresse=$adresse;
	 }
	 
	 public function setDomaine($adresse) {
		  $this->domaine=$domaine;
	 }
  }	
?>	