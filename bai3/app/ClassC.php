<?php

namespace App;

class ClassC implements interfaceModel{
    public function show(){
        echo "<br/> Hiển thị bài viết";
    }
    public function insert($name)
    {
        echo "<br/> Thêm bài viết mới $name thanh cong";
    }
}