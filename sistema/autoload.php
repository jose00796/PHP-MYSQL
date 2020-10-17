<?php

spl_autoload_register(function($classname){
            if (file_exists("$classname.php")) {
                require "$classname.php";
            }
});