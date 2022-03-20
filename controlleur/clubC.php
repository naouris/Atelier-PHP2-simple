<?php

include "../config.php";
require_once '../model/Club.php';

class ClubC{
	
 function afficherClubs(){
	
	
	$sql="SELECT * from club";
	$db=config::getConnexion();
	
	
	
		$stmt=$db->query($sql);
		$rows = $stmt->fetchAll();
		
		var_dump($rows);
		
		
	
		
	
 }	
}

?>