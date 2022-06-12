<?php 
require_once("./autoload.php");

$conexión = new Connection();

$rating = new Rating();

/* $rating->getAllWorkers();
print_r($rating->getWorkers()); */

// print_r($rating->getWorker(1));

/* echo "<pre>";
print_r($rating->getSkillsList(4));
echo "</pre>"; */

/* echo "<pre>";
print_r($rating->getLanguageList(2));
echo "</pre>"; */

echo "<pre>";
print_r($rating->getCountryName(2));
echo "</pre>";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>