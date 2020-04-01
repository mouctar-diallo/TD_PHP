<?php
//tester si les mots sont valides dans l'exo3
function motContenantM($mots){
	$m = 0;
	for ($i=0; $i < taille($mots) ; $i++) { 
		if (TrouveCaractere('m',$mots[$i]) || TrouveCaractere('M',$mots[$i])) {
			$m++;
		}
	}
	return $m;
}

//fonction qui genere les inputs dynamiquement
function generer($n)
{
	if (is_numeric($n) && $n > 0) {
		for ($i=1; $i <= $n; $i++) { ?>
			<center>
				<label>champ N°<?= $i ?></label><br>
				<span><?php if(!empty($_POST['champ'.$i]) && longChaine($_POST['champ'.$i])>20){ echo 'max 20 caractères';}?></span>
				<span><?php if(empty($_POST['champ'.$i])){ echo "remplir champ N°".$i; }?></span>
				<span><?php if(!empty($_POST['champ'.$i]) && !MotValide($_POST['champ'.$i])){ echo "entrer un mot valide";}?></span>
				<input type="text" name="champ<?= $i ?>" class="form" value="<?php if(!empty($_POST['champ'.$i])){ echo $_POST['champ'.$i];} ?>" ><br> <?php
				} ?>
			</center><?php 
	}else{
		echo "<center>entrer un entier</center>";
	}
}
//fonction qui renvoie la taille d'une chaine de caractere
function longChaine($chaine)
{
	for ($i=0; isset($chaine[$i]) ; $i++) { }
	return $i;
}

//function qui teste si un mot est valide
function MotValide($mot)
{	
	for ($i=0; $i <longChaine($mot) ; $i++) { 
		if($mot[$i] != Caractere($mot[$i])){
			return 0;
		}
	}
	return 1;
}

//fonction qui teste si un caractere est dans une chaine ou dans un tableau
function TrouveCaractere($caractere,$objet)
{
	$espion = '';
	for ($i=0; $i <TableauOuChaine($objet); $i++) { 
		if($caractere == $objet[$i]){
			$espion = $caractere;
		}
	}
	return $espion;
}

//tester si un caractere est en minuscule
function minuscule($caractere)
{
	return ($caractere>= 'a' && $caractere<='z');
}
//tester si un caractere est en majuscule
function majuscule($caractere)
{
	return ($caractere>= 'A' && $caractere<='Z');
}
//tester si c'est un caractere min ou maj
function Caractere($caractere)
{
	return (minuscule($caractere) || majuscule($caractere));
}
//remplir un tableau des minuscules
function TabMinuscule()
{
  	$i='a'; $min = array(); 
	while ($i <='z') 
	{ 
		$min[] = $i;
		$i++;
		if($i=='z')
		{
			$min[] = $i;
			break;
		}
	}

	return $min;
}

//remplir un tableau des majuscules
function TabMajuscule()
{
  	$i='A'; $maj = array(); 
	while ($i <='Z') 
	{ 
		$maj[] = $i;
		$i++;
		if($i=='Z')
		{
			$maj[] = $i;
			break;
		}
	}

	return $maj;
}
//convertir un caractere en majuscule
function convertionMinMaj($caractere)
{
	$maj='';
	for ($i=0; $i < taille(TabMajuscule()); $i++) { 
		if ($caractere==TabMinuscule()[$i]) {
			$maj = TabMajuscule()[$i];
		}
	}
	return $maj;
}
//convertir un caractere en minuscule
function convertionMajMin($caractere)
{
	$min='';
	for ($i=0; $i < taille(TabMinuscule()); $i++) { 
		if ($caractere==TabMajuscule()[$i]) {
			$min = TabMinuscule()[$i];
		}
	}
	return $min;
}
//fonction qui renvoie la taille d'un tableau
function taille($tableau)
{
	for ($i=0;isset($tableau[$i]);$i++);
	return $i;
}

//fonction qui convertit une chaine en majuscule
function MajChaine($chaine)
{
	for ($i=0; $i <longChaine($chaine) ; $i++) { 
		if ($chaine[$i] == minuscule($chaine[$i])) {
			$chaine[$i] = convertionMinMaj($chaine[$i]);
		}
	}

	return $chaine;
}

//fonction qui convertit une chaine en minuscule
function MinChaine($chaine)
{
	for ($i=0; $i <longChaine($chaine) ; $i++) { 
		if ($chaine[$i] == majuscule($chaine[$i])) {
			$chaine[$i] = convertionMajMin($chaine[$i]);
		}
	}

	return $chaine;
}

//fonction qui renvoie la taille d'un tableau ou d'une chaine de caractere
function TableauOuChaine($wane)
{
	for ($i=0; isset($wane[$i]) ; $i++);
	return $i;
}

function alphabet(){
	foreach(range('A','Z') as $element) {
    echo $element;
	}
}

