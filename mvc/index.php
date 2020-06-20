<?php 



spl_autoload_register(function($class){
    $chemin = "models/$class.php";
    $cheminDao = "models/dao/$class.php";
    if (file_exists($chemin)) {
        require_once($chemin);
    }elseif (file_exists($cheminDao)) {
        require_once($cheminDao);
    }
});
