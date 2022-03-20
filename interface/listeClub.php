<!doctype html>
<html>
<head></head>

<?php

include "../controlleur/ClubC.php";


$ClubC=new ClubC();
$listeClub=$ClubC->afficherClubs();

?>
<body>

<table border='1'>

    <tr>
      <th>id</th> <th>nom</th> <th>description</th> <th>adresse</th><th>domaine</th>
    </tr>
	

	
	   <tr>
	   <td><?php echo $id['id'] ?></td>
       <td><?php echo $nom['nom'] ?></td>
       <td><?php echo $description['description'] ?></td>	
       
	   <td><?php echo $adresse['adresse'] ?></td>
       <td><?php echo $domaine['domaine'] ?></td>	
       </tr>
		   
	</table>

</body>
</html>
