<?php
abstract class Animal implements AnimalInterface
{
    public function eat() {
        echo "Eat!<br>";
    }

    public function sleep() {
        echo "Sleep!<br>";
    }
}

?>