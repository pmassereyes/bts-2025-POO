<?php

class Cat extends Animal {
    private int $age;
    private string $color;

    public function __construct(string $name = "Inconnu", int $age = 0, string $color = "Noir") {
        parent:: __construct($name);
    }
}