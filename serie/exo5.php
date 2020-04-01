
<?php
$numeros = array();
$orange = array();
$expresso = array();
$free = array();
$invalide=array();
if(isset($_POST['valider']))
{
	
	if (!empty($_POST['telephone']))
	{
		$telephone = htmlspecialchars($_POST['telephone']);
		$numeros = preg_split("#[ ]+#", $telephone);

		
		for ($i=0; $i < count($numeros); $i++) 
		{ 
			$num = $numeros[$i];
			if (preg_match('/^[0-9]{9}+$/', $num))
		    {
		        
		       	 	if(strlen(substr($numeros[$i], 0,2) == '77' || substr($numeros[$i], 0,2) == '78'))
			        {
			        	$orange[] = $numeros[$i];
			        }else if (strlen(substr($numeros[$i], 0,2) == '76') )
			        {
			        	$free[] = $numeros[$i];
			        }else if (strlen(substr($numeros[$i], 0,2) == '70')) 
			        {
			        	$expresso[] = $numeros[$i];
			        }else{
			        	$invalide[] = $numeros[$i];
			        }
		       
		    }
		    else
		    {
		       $invalide[] = $numeros[$i];
		    }
		}
	      //vire tout ce qui n'est pas numerique 
	 	  //$telephone = preg_replace( '#\D#', '', $telephone );

	    
	}else{
		echo "entrer les numeros";
	}
}
$operateurs = array
				(
					'orange'=>$orange,
					'free'=>$free,
					'expresso'=>$expresso,
					'invalide'=>$invalide
				);

var_dump($operateurs);
?>




<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="serie/style.css">
</head>
<body>
	<center>
	<form action="" method="POST">
		<label for="telephone">entrer les numeros : </label><br/>
		<textarea id="telephone" name="telephone"  placeholder="exemple : 781122222" cols="100" rows="6"></textarea><br>
    	<input type="submit" value="tester les numeros" name="valider"  class="btn-numero" />
	</form>
	</center>
</body>
</html>