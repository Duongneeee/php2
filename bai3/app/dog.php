<?php

namespace App;

class dog implements Animal{
    
    public function getClass(){
        echo self::class . "<br />";
        echo static::class . "<br/>";
    }

    public function an(){
        echo "<br/> Hiển thị sản phẩm";

    }

    public function noi($name)
    {
        echo "<br/> Thêm sản phẩm $name thành công";
    }
}