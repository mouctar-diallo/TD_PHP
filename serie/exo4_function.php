<?php
//test si phrase commence par une majuscule et se termine par un point
function phrase_valide($phrase){
	if (preg_match("#^[A-Z].*[\.!?]$#", $phrase)) {
		return true;
	}
	return false;
}
/*fonction permettant de nettoyer les espaces en debut-milieu-et fin de chaine
et aussi les espaces apres une virgule , une apostrophe ou un point virgure. */
function delete_space($phrase){
	$clean = preg_replace('/\s\s+/', ' ', trim($phrase));
	$clean = preg_replace("#(?<=[',;])\s*#", '',$clean);
	return $clean;
}
//decoupe les phrases
function getPhrase($phrases){
	$invalide = [];
	$result = preg_split("#(?<=[.?!])\s*(?=[a-z])#i", $phrases);
	foreach ($result as $phrase) {
	 	$phrase = ucfirst(delete_space($phrase));
	 	if (phrase_valide($phrase) && my_strlen($phrase)<=200) {
			echo   $phrase ." ";
		}else{
			return  $phrase;
		}
	}
}
//calcul la longueur d'une chaine
function my_strlen($chaine){
	for ($i=0; isset($chaine[$i]) ; $i++);
	return $i;
}
?>