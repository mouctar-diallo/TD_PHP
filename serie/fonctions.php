<?php

$T1 = array();
//fonction moyenne
function moyenne($tableau)
{
    $somme =0;
    $moy = 0;
    for($i = 1; $i< count($tableau);$i++)
    {
        $somme = $somme+$tableau[$i];
    }
    $moy = $somme/count($tableau);

    return $moy;
}
//fonction pagination tableau inferieur
function inferieur($tableau){

$elementsParPage=100; 
 
$total=count($tableau);
 
//determinons le nbre des pages
$nombreDePages=ceil($total/$elementsParPage);
 
if(isset($_GET['page']))
{
    $pageActuelle=intval($_GET['page']);
 
    if($pageActuelle>$nombreDePages) 
    {
        $pageActuelle=$nombreDePages;
    }
}
else 
{
    $pageActuelle=1;    
}

$nombreDePages=ceil($total/$elementsParPage);
 
$premiereEntree=($pageActuelle-1)*$elementsParPage; // On calcule la première entrée à lire
 
$cpt=0;

echo "<table  class='TablePremier' style='margin-top:20px;'><tr>";
    for ($i=$premiereEntree; $i < ($premiereEntree+$elementsParPage); $i++) 
    { 
        if($i==count($tableau))
        {
            break;
        }
        $cpt++;            
        echo '<td>'.$tableau[$i].'</td>';

       if($cpt==10)
       {
            echo '</tr>';
            $cpt=0;
       }           
    }
echo '</table>';

echo '<p>Page : '; 
    for($i=1; $i<=$nombreDePages; $i++)
    {
         if($i==$pageActuelle)
         {
             echo '  [  '.$i.'  ]  '; 
         }    
         else 
         {
              echo '<a href="index.php?pageCourant=exo1&page='.$i.'">  '.$i.'  </a>';
         }
    }
echo '</p>';
}
//pagination tableau superieur
function superieur($tableau)
{
    $elementsParPage=100; 
 
$total=count($tableau);
 
//determinons le nbre des pages
$nombreDePages=ceil($total/$elementsParPage);
 
if(isset($_GET['pagesup']))
{
    $pageActuelle=intval($_GET['pagesup']);
 
    if($pageActuelle>$nombreDePages) 
    {
        $pageActuelle=$nombreDePages;
    }
}
else 
{
    $pageActuelle=1;    
}

$nombreDePages=ceil($total/$elementsParPage);
 
$premiereEntree=($pageActuelle-1)*$elementsParPage; // On calcule la première entrée à lire
 
$cpt=0;

echo "<table  class='TablePremier' style='margin-top:20px;'><tr>";
    for ($i=$premiereEntree; $i < ($premiereEntree+$elementsParPage); $i++) 
    { 
        if($i==count($tableau))
        {
            break;
        }
        $cpt++;            
        echo '<td>'.$tableau[$i].'</td>';

       if($cpt==10)
       {
            echo '</tr>';
            $cpt=0;
       }           
    }
echo '</table>';

echo '<p>Page : '; 
    for($i=1; $i<=$nombreDePages; $i++)
    {
         if($i==$pageActuelle)
         {
             echo '  [  '.$i.'  ]  '; 
         }    
         else 
         {
              echo '<a href="index.php?pageCourant=exo1&pagesup='.$i.'">  '.$i.'  </a>';
         }
    }
echo '</p>';
}

//fonction qui determine les  nombres premiers tout en le mettant dans un tableau associatf
function premier($nombre)
{
    if($nombre > 10000){
        for($i = 1;$i <= $nombre; $i++)
        {
            $cpt=0;
            for($j=1;$j<=$i; $j++)
            {
                if($i%$j==0)
                {
                    $cpt++;
                }
            }
            if($cpt==2)
            {
                $T1[] = $i;
            }
        }          
    }else{
        echo "<center>entrer un nombre superieur a 10 000<center>";
    }

     $inferieurs = array();
    $superieurs= array();

    for($i=0;$i< count($T1); $i++)
    {
        if($T1[$i]< moyenne($T1))
        {
            $inferieurs[] = $T1[$i];
        }else{
            $superieurs[] = $T1[$i];
        }
    }

    $T = array
    (
        'inferieur'=>$inferieurs,
        'superieur'=>$superieurs
    );

    $_SESSION['T'] = $T1;

    $_SESSION['inferieur'] = $T['inferieur'];
    $_SESSION['superieur'] = $T['superieur'];
}
?>

