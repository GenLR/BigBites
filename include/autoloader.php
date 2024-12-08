<?php
spl_autoload_register('autoloader');

    function autoloader($className){
        $path = "include/";
        $extension = ".php";
        $fullpath = $path . $className . $extension;

        if (file_exists($fullpath)) {
            require_once $fullpath;
        }
    }
    

