<?php

function phrase_valide($phrase){
	$phrase =  ltrim($phrase);
	//suppression des espaces en milieu de chaine
	preg_replace('/\s\s+/', ' ', $phrase);
	if (preg_match("#^[A-Z].*[\.!?]$#", $phrase)) {
		return true;
	}
	return false;
}

function getPhrase($phrase){
	preg_match_all("#[^.|?|!]*[.|?|!]#", $phrase, $phrases);
	for ($i=0; $i < count($phrases[0]); $i++) { 
		if (phrase_valide($phrases[0][$i])) {
			echo  $phrases[0][$i] ." ";
		}
	}
}

?>