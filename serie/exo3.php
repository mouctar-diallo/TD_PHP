<?php
//fichier contenant toutes les fonction
include('serie/fonction.php');

@$nbChamps = $_POST['n'];

$mots = array();
if (isset($_POST['valider'])) {
	
	for($i=1; $i <=$nbChamps; $i++) { 
		if (!empty($_POST['champ'.$i])) {
			$mots[] =$_POST['champ'.$i];
		}
	}
	
	$nombre = motContenantM($mots);
	if($nbChamps==taille($mots)){
		echo "<div class='resultat'> Vous avez saisie  ".taille($mots)." mots 
				dont ".$nombre." avec la lettre M</div>";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>EXERCICE 3</title>
	<link rel="stylesheet" type="text/css" href="serie/style.css">
</head>
<body>
	<center>
	<form action="" method="POST">
		<label>entrer N</label><br>
		<input type="text" name="n" class="form" value="<?= $nbChamps ?>" id="n"><br>
		<input type="submit" name="generer" value="generer" class="btn-generer">
		<?php 
			if(!empty($nbChamps)){ 
				generer($nbChamps); ?>
				<input type="submit" name="valider" value="valider" class="btn-valider"> <?php
			} 
		?>
	</form>
	</center>
</body>
</html>



