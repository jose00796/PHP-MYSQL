<?php

spl_autoload_register(function($classname){
            if (file_exists("sistema/$classname.php")) {
                require "sistema/$classname.php";
            }
});