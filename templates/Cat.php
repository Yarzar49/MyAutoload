<?php

class Cat extends Animal implements CatInterface
{
    public function meow() {
        echo "Meow!<br>";
    }
}

?>