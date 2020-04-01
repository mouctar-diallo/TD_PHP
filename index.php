
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="app1/style.css">
    
</head>

<body>
    <div class="nav">
        
    </div>
     <div class="body">
        <div class="container "style="margin-top: 3%;  margin: 0; padding: 0;" >
         <div class="row">
    <div class="vertical-menu">
        <ul>
            <a href="index.php?pageCourant=app1">App 1</a>
        </ul>
        <ul>
            <a href="index.php?pageCourant=app2">App 2</a>
        </ul>
         <ul>
            <a href="index.php?pageCourant=exo1">Exo 1</a>
        </ul>
         <ul>
            <a href="index.php?pageCourant=exo2">Exo 2</a>
        </ul>
         <ul>
            <a href="index.php?pageCourant=exo3">Exo 3</a>
        </ul>
         <ul>
            <a href="index.php?pageCourant=exo5">Exo 5</a>
        </ul>
    </div>
    <div class="center">
         <?php
           if(!empty($_GET['pageCourant']))
           {
            $pageCourant = $_GET['pageCourant'];
                switch ($pageCourant) 
                {
                    case 'app1':
                        include('app1/app1.php');
                        break;
                    case 'app2':
                        include('app2/app2.php');
                        break;
                    case 'exo1':
                        include('serie/exo1.php');
                        break;
                    case 'exo2':
                        include('serie/exo2.php');
                        break;
                    case 'exo3':
                        include('serie/exo3.php');
                        break;
                    case 'exo5':
                        include('serie/exo5.php');
                        break;
                    /*case 'qcm':
                        include('qcm/admin.php');
                        break;*/
                }
           }
         ?>
    </div>
 </div>
</div>
</div>
</body>
</html>
