<?php

class Animal{
    public $name;
    public $weight;
    // Phương thức khởi tạo
    public function __construct($name,$weight)
    {
        $this->name = $name;
        $this->weight = $weight;
    }

    public function getInof(){
        echo "Con vật tên {$this->name} có cân nặng {$this->weight}<br />";
    }
}

$animal1 = new Animal("Cau vang",20);
$animal2 = new Animal("meo",3);
var_dump($animal1);

$animal1->getInof();
$animal2->getInof();