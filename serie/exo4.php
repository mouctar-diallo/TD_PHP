<?php
include('exo4_function.php');
@$phrase = $_POST['phrase'];
$error = ""; $resultat = "";
if (isset($_POST['valider'])) {
	if (empty($_POST['phrase'])) {
		$error = "veuillez remplir le champ";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>EXERCICE 4</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<center>
		<form method="POST" action="">
			<label for="phrase">entrer les phrases : </label><br/>
			<span><?= $error ?></span>
			<textarea id="phrase" name="phrase"  cols="100" rows="6"></textarea><br>
	    	<input type="submit" value="tester les phrases" name="valider" class="btn-generer" /><br>
	    	<?php
	    		if (!empty($phrase)) {?>
	    		<label>RESULTATS</label><br>
	    		<textarea id="phrase"  cols="100" rows="6" readonly="false"><?php getPhrase($phrase);?></textarea>
	    	<?php }
	    	?>
		</form>
	</center>
</body>
</html>
