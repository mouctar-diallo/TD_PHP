
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>
<body>
    <center>
        <form action="" method="POST">
            <select name="langue" id="langue" class="form">
                <option value="0">choisissez une langue</option>
                <option value="french">french</option>
                <option value="english">english</option>
            </select>
            <input type="submit" name="choix" value="choisir">
        </form> 
    </center>

<?php

$mois = array
(
    'english'=>array(
        1=> 'january',2=>'february',3=>'march',4=>'april',5=>'may',6=>'june',
        7=>'july',8=>'august',9=>'september',10=>'october',11=>'november',12=>'december'
    ),

    'french'=>array(
        1=> 'janvier',2=>'fevrier',3=>'mars',4=>'avril',5=>'mai',6=>'juin',
        7=>'juillet',8=>'aout',9=>'septembre',10=>'octobre',11=>'novembre',12=>'decembre'
    )
);

if(isset($_POST['choix']))
{
    $langue =  $_POST['langue'];
    if(strcmp($langue, '0'))
    {
         ?>
         <center><table border="1" style="margin-top: 10%;" class="calendar">
              <?php
              $k = 0;
              for($i=1;$i<=4;$i++)
              {?>
                <tr>
                <?php
                  for($j=1;$j<=3;$j++)
                  {?>
                      <td>
                        <?php echo ++$k; ?> </td> 
                      <td><?php echo $mois[$langue][$k]; ?></td>
                  <?php
                  }
              }?>
          </table></center>   
     <?php
    }else{
        echo "<center>choisissez une langue</center>";
    }
}
?>
   
</body>
</html>