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
	$phrase = trim($phrase);
	$clean = preg_replace('/\s\s+/', ' ', $phrase);
	return $clean;
}

function getPhrase($phrase){
	preg_match_all("#[^.|?|!]*[.|?|!]#", $phrase, $phrases);
	for ($i=0; $i < count($phrases[0]); $i++) { 
		$phrases[0][$i]=delete_space($phrases[0][$i]);
		if (phrase_valide($phrases[0][$i])) {
			echo  $phrases[0][$i] ." ";
		}
	}
}
?>