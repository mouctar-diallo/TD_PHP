<?php
//tableau des couleurs
$colors = array
(
	'red','black','yellow','green','burlywood','purple'
 );
 //couleurs utilisées
function couleur($colors)
{
	foreach($colors as $color) 
	{?>
		<option><?php echo $color;?></option>
	
	<?php
	}
}
//fonction permettant de dessiner la matrice
function matrice($taille,$c1,$c2,$c3)
{
	$i=1;

	$chaine= "<center><table>";
	while ($i <= $taille) 
	{
		$chaine= $chaine."<tr>";
		$j=1;
		while ($j <= $taille) 
		{
			if ($i > $j AND $j+$i > $taille+1) 
			{
				$chaine = $chaine."<td class='case' style='background-color: $c1;'></td>";

			}else if(($i<$j AND $j+$i < $taille+1) OR $i==$j OR $i+$j==$taille+1){

				$chaine = $chaine."<td class='case' style='background-color: $c2;'></td>";
			}else{
				$chaine = $chaine."<td class='case' style='background-color: $c3;'></td>";
			}

			$j++;
		}

		$chaine= $chaine."</tr>";			
		$i++;
	}
	$chaine = $chaine."</table></center>";
	return $chaine;
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>App 2</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Trade+Winds&display=swap" rel="stylesheet">
</head>
<body>
	<div class="App1">
		<p>SONATEL ACADEMY</p>
		<form action="" method="POST">
			<label>Taille de la matrice carrée</label><br>
			<img src="icone/1.png" style="background-color: blue;">
			<input type="" name="taille" class="form">
			<p>
				<label>SELECT C1</label><br>
				<img src="icone/2.png" style="background-color: red;">
				<select  name="c1" class="form">
				  <?php couleur($colors);?>
				</select>
			</p>
			<p>
				<label>SELECT C2</label><br>
				<img src="icone/2.png" style="background-color: red;">
				<select  name="c2" class="form">
				 	<?php couleur($colors);?>.
				</select>
			</p>
			<p>
				<label>SELECT C3</label><br>
				<img src="icone/2.png" style="background-color: green;">
				<select  name="c3" class="form">
				 	<?php couleur($colors);?>.
				</select>
			</p>
			<p>
				<label>Position</label><br>
				<img src="icone/3.png" style="background-color: grey;">
				<select class="form" name="position">
					<option value="haut">Haut</option>
					<option value="bas">Bas</option>
				</select>
			</p>
			<input type="submit" name="annuler" value="ANNULER" class="btn-annuler">
			<input type="submit" name = "dessiner" value="DESSINER" class="btn-dessiner">
		</form>

<p style="margin-top: 10%;">	
			
<?php
if(isset($_POST['dessiner']))
{
	$taille = $_POST['taille'];

	$taille = preg_replace( '#\D#', '', $taille);
	$c1 = $_POST['c1'];
	$c2 = $_POST['c2'];
	$c3=$_POST['c3'];
	$position= $_POST['position'];

	if ($c1 != $c2 AND $c1!=$c3 AND $c2 != $c3)
	{
		if ($position == 'haut') 
		{
			$chaine = matrice($taille,$c1,$c2,$c3);
			echo $chaine;
		}else{
			$chaine = matrice($taille,$c3,$c2,$c1);
			echo $chaine;
		}
	}else{
		echo "deux couleurs identiques";
	}
}

?>
</p>
</div>
</body>
</html>