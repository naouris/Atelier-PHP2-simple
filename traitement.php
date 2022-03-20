<html>
<head>
<title> club</title>
</head>

	<body>
<?php

	if (isset($_GET['id'])&& isset($_GET['nom'])&& isset($_GET['description'])&& isset($_GET['adresse'])&& isset($_GET['domaine'])){
	
	     if (!empty($_GET['id'])&&!empty($_GET['nom'])&&!empty($_GET['description'])&& !empty($_GET['adresse'])&& !empty($_GET['domaine'])){
		 
		  $id=$_GET['id'];
		  $nom=$_GET['nom']; 
		  $description=$_GET['description'];
		  $adresse=$_GET['adresse'];
		  $domaine=$_GET['domaine'];
	  
		  echo 'id:'.$id.'<br>';
		  echo 'nom:'.$nom;
	      echo 'description:'.$description;
	      echo 'adresse:'.$adresse;
	      echo 'domaine:'.$domaine;
	
	
	}}
?>	


<table border=1 width="100%">

    <tr>
  <td>id</td>
  
  <td>nom</td>

  <td>description</td>

  <td>adresse</td>

  <td>domaine</td>
  
  
    </tr>
	
<tr>
 <td><?php  echo 'id:'.$id.'<br>'; ?></td>
  <td><?php echo $nom ; ?></td>
  <td><?php echo $description ; ?></td>
  <td><?php echo $adresse ; ?></td>
  <td><?php echo $domaine ; ?></td>
    
        </tr>
	

</table>
				


</body>
</html>
