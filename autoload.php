<?php

function autoloading($className){
    
    $file = dirname(__FILE__) . DIRECTORY_SEPARATOR . "clases" . DIRECTORY_SEPARATOR . $className .".php";
    
    if(file_exists($file)){
        require_once $file;
    }else{
        die("La clase $className no se encuentra.");
    }
}


spl_autoload_register("autoloading");