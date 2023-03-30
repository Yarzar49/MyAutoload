<?php

class Dog extends Animal implements DogInterface
{
    public function bark() {
        echo "Woof!<br>";
    }
}

?>