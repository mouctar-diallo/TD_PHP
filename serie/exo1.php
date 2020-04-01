<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="serie/style.css">
    <title>exo 1</title>
</head>
<body>
    <center>
    <form action="" method="post">
        <label for="nombre">nombre</label>
        <input type="text" name="nombre" class="form">
        <input type="submit" name="valider" value="Valider">
    </form>
    </center>
</body>
</html>

<?php
session_start();

include('fonctions.php');

if(isset($_POST['valider']))
{
    if(!empty($_POST['nombre']))
    {
        $nombre = $_POST['nombre'];
        if(!preg_match("#[^0-9]+#",$nombre))
        {
            premier($nombre);

        }else{
            echo "<center>entrer un entier</center>";
        }
    }else{
        echo "remplir le champ";
    }
}

if(!empty($_SESSION)) 
{
    echo '<div class="inferieur">';
        echo "<strong>Tableau Inferieur</strong>";
        echo inferieur($_SESSION['inferieur']);
    echo "</div>";
   
    echo '<div class="superieur">';
        echo "<strong>Tableau Superieur</strong>";
        echo  superieur($_SESSION['superieur']);
    echo "</div>";
}
?>


