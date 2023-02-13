<?php

use Animal as GlobalAnimal;

class Animal{
    private $name;
    public $weight;
    private $thu;
    // Phương thức khởi tạo
    public function __construct($name,$weight,$thu)
    {
        $this->name = $name;
        $this->weight = $weight;
        $this->thu=$thu;
    }


    public function getInof(){
        echo "Con vật tên {$this->name} có cân nặng {$this->weight}<br>";
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name=$name;
    }

    public function getThu(){
        return $this->thu;
    }

    public function setThu($thu){
        $this->thu=$thu;
    }
}
class Dog extends Animal{
    public $color;
    public function __construct($name,$weight,$color)
    {
        parent::__construct($name,$weight);
        $this->color=$color;
    }
    public function say(){
        echo "{$this->name} co mau {$this->color} dang noi...";
    }
}

$dog = new Dog("cau vang",10,"den");

$dog->getInof();
$dog->say();

$dog->name = "duong";
$animal = new Animal("cau xanh",10);
