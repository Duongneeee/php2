<?php

namespace App;

class ClassA implements interfaceModel {
    public function getClass(){
        echo self::class . "<br />";
        echo static::class . "<br/>";
    }

    public function show(){
        echo "<br/> Hiển thị sản phẩm";

    }

    public function insert($name)
    {
        echo "<br/> Thêm sản phẩm $name thành công";
    }
}