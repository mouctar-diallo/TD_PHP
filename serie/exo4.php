<?php

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
			<textarea id="phrase" name="phrase"  cols="100" rows="6"></textarea><br>
	    	<input type="submit" value="tester les phrases" name="valider" class="btn-generer" />
		</form>
	</center>
</body>
</html>
<?php
function phrase_valide($phrase){
	if (preg_match("#^[A-Z].*[\.!?]$#", $phrase)) {
		return true;
	}
	return false;
}

var_dump(phrase_valide('Je suis fatigué way.'));
?>