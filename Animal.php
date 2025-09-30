<?php

class Animal {
    private string $name;
    private int $age;
    private string $color;
    public function __construct(string $name){
        $this->name = $name;
    }
    public function setName(string $name): void {
        $this->name = $name;
    }
    public function getName(): string {
        return $this->name;
    }
    public function setAge(int $age): void {
        $this->age = $age;
    }
    public function getAge(): int {
        return $this->age;
    }
    public function setColor(string $color): void {
        $this->color = $color;
    }
    public function getColor(): string {
        return $this->color;
    }

}