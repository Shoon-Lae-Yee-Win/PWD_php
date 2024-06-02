<?php

class Animal 
{
    // private $name;  parent class is only work
    protected $name;  // parent & child is work [property]

    public function __construct($name) {   // first working
        $this->name = $name;
    }

    public function hello() {
        echo "Hello $this->name <br>";
    }

    static function info() {
        echo "Animal class <br>";
    }
}

class dog extends Animal
{
    public function run() {
        echo "$this->name is running... <br>";
    }
}

Animal::info();  // static function call

$bobby = new dog("bobby");
$bobby->hello();
$bobby->run();