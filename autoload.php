<?php

    function autoloadContracts($name) {
        echo "Name $name <br>";
        $fileName = Path."/contracts/".$name.".php";
        if(is_readable($fileName)) {
            require $fileName;
        }
    }

    function autoloadTemplates($name) {
        $fileName = Path."/templates/".$name.".php";
        if(is_readable($fileName)) {
            require $fileName;
        }
    }

    spl_autoload_register("autoloadContracts");
    spl_autoload_register("autoloadTemplates");


?>