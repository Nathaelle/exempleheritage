<?php

require "controllers.php";

spl_autoload_register(function ($class) {
    $class = lcfirst(str_replace("\\", "/", $class));
    if(file_exists("$class.php")) {
        require "$class.php";
    }
});

$route = isset($_GET["route"])? $_GET["route"] : "page1";
switch($route) {

    case "page1": $t = showPage1();
    break;
    case "page2": $t = showPage2();
    break;
    case 'insertdemandeur' : insertDemandeur();
    break;
    case 'inserttravailleur' : insertTravailleur();
    break;
    default : $t = showPage1();
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php require "templates/".$t["template"] ?>
    
</body>
</html>