<?php
//test si phrase commence par une majuscule et se termine par un point
function phrase_valide($phrase){
	if (preg_match("#^[A-Z].*[\.!?]$#", $phrase)) {
		return true;
	}
	return false;
}
//fonction permettant de nettoyer les espaces en debut-milieu-et fin de chaine
function delete_space($phrase){
	$clean = preg_replace('/\s\s+/', ' ', trim($phrase));
	return $clean;
}
//decoupe les phrases
function getPhrase($phrases){
	$result = preg_split("#(?<=[.?!])\s*(?=[a-z])#i", $phrases);
	//regex permettant de supprimer espaces apres virgule ou point ou point virgure. 
	$result = preg_replace("#(?<=[',;])\s*#", '',$result);
	foreach ($result as $phrase) {
	 	$phrase = delete_space($phrase);
	 	if (phrase_valide($phrase)) {
			echo   $phrase ." ";
		}else{
			return  $phrase ." ";
		}
	}
}
?>